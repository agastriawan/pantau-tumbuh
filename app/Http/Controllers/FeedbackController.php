<?php

namespace App\Http\Controllers;


use App\Models\Anak;
use App\Models\Feedback;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function feedback($id)
    {
        $monitoring = Monitoring::findOrFail($id); 
        $anak = Anak::select('id', 'nama')->get();
        $feedback = Feedback::where('rekaman_monitoring_id', $id)->first();
    
        $data = [
            "monitoring" => $monitoring,
            "anak" => $anak, 
            "feedback" => $feedback, 
        ];

        return view('admin/monitoring/feedback', $data); 
    }

    public function _feedback(Request $request)
    {
        $messages = [
            'isi_feedback.required' => 'Jawaban Tenaga Medis wajib diisi.',
            'surat_rujukan.required' => 'Surat rujukan wajib diisi.',
            'surat_rujukan.max' => 'Surat rujukan maksimal 10MB.',
            'surat_rujukan.mimes' => 'Surat rujukan harus berupa PDF.',
            'modul_kesehatan.required' => 'Modul kesehatan wajib diisi.',
            'modul_kesehatan.max' => 'Modul kesehatan maksimal 10MB.',
            'modul_kesehatan.mimes' => 'Modul kesehatan harus berupa PDF.',
        ];

        $validator = Validator::make($request->all(), [
            'isi_feedback' => 'required',
            'surat_rujukan' => 'required|mimes:pdf|max:10240',
            'modul_kesehatan' => 'required|mimes:pdf|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $suratName = $request->nama; 
            $suratExtension = $request->file('surat_rujukan')->getClientOriginalExtension();
            $suratNameWithPrefix = 'Surat Rujukan_'. '_' . $suratName . '_' . time(); 
            $surat = $request->file('surat_rujukan');
            $surat->move(public_path('surat_rujukan'), $suratNameWithPrefix . '.' . $suratExtension); 

            $modulName = $request->nama; 
            $modulExtension = $request->file('modul_kesehatan')->getClientOriginalExtension();
            $modulNameWithPrefix = 'Modul Kesehatan_'. '_' . $modulName . '_' . time(); 
            $modul = $request->file('modul_kesehatan');
            $modul->move(public_path('modul_kesehatan'), $modulNameWithPrefix . '.' . $modulExtension); 

            $monitoring = Monitoring::findOrFail($request->rekaman_monitoring_id);

            $feedback = Feedback::where('rekaman_monitoring_id', $request->rekaman_monitoring_id)->first();

            if ($feedback) {
                $feedback->update([
                    'isi_feedback' => $request->isi_feedback,
                    'user_id' => Auth::user()->id,
                    'surat_rujukan' => $suratNameWithPrefix . '.' . $suratExtension,
                    'modul_kesehatan' => $modulNameWithPrefix . '.' . $modulExtension,
                ]);
            } else {
                Feedback::create([
                    'rekaman_monitoring_id' => $request->rekaman_monitoring_id,
                    'isi_feedback' => $request->isi_feedback,
                    'user_id' => Auth::user()->id,
                    'surat_rujukan' => $suratNameWithPrefix . '.' . $suratExtension,
                    'modul_kesehatan' => $modulNameWithPrefix . '.' . $modulExtension,
                ]);
            }

            $monitoring->update([
                'status' => 'Selesai',
                'updated_at' => now()
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Disimpan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
