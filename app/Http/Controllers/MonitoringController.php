<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Monitoring;
use App\Exports\MonitoringExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MonitoringController extends Controller
{
    public function monitoring()
    {
        return view('admin/monitoring/list');
    }

    public function tambah_monitoring()
    {
        $anak = Anak::select('id', 'nama')->get();
        $data = [
            'anak' => $anak
        ];
        return view('admin/monitoring/add', $data);
    }

    public function edit_monitoring($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $anak = Anak::select('id', 'nama')->get();

        $data = [
            "monitoring" => $monitoring,
            "anak" => $anak
        ];

        return view('admin/monitoring/edit', $data);
    }

    public function _export()
    {
        $monitoring = Monitoring::with('anak:id,nama,jenis_kelamin')->get();

        $data = $monitoring->map(function ($item) {
            return [
                'id' => $item->id,
                'nama_anak' => $item->anak->nama ?? '-',
                'jenis_kelamin' => $item->anak->jenis_kelamin,
                'status' => $item->status,
                'berat_badan' => $item->berat_badan,
                'tinggi_badan' => $item->tinggi_badan,
                'lingkar_kepala' => $item->lingkar_kepala,
                'kondisi_kesehatan' => $item->kondisi_kesehatan,
                'status_imunisasi' => $item->status_imunisasi,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ];
        });

        return Excel::download(new MonitoringExport($data), 'Monitoring Kesehatan Anak.xlsx');
    }

    public function _list_monitoring()
    {
        $monitoring = Monitoring::with('anak:id,nama')->get();

        $data = $monitoring->map(function ($item) {
            return [
                'id' => $item->id,
                'nama_anak' => $item->anak->nama ?? '-',
                'status' => $item->status,
                'created_at' => $item->created_at,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function _tambah_monitoring(Request $request)
    {
        $messages = [
            'anak_id.required' => 'Nama anak wajib dipilih.',
            'berat_badan.required' => 'Berat badan wajib diisi.',
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'tinggi_badan.required' => 'Tinggi badan wajib diisi.',
            'tinggi_badan.numeric' => 'Tinggi badan harus berupa angka.',
            'lingkar_kepala.required' => 'Lingkar kepala wajib diisi.',
            'lingkar_kepala.numeric' => 'Lingkar kepala harus berupa angka.',
            'kondisi_kesehatan.required' => 'Kondisi kesehatan wajib diisi.',
            'status_imunisasi.required' => 'Status imunisasi wajib diisi.',
            'pertanyaan_orang_tua.required' => 'Pertanyaan orang tua wajib diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'anak_id' => 'required|exists:anak,id',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lingkar_kepala' => 'required|numeric',
            'kondisi_kesehatan' => 'required|string',
            'status_imunisasi' => 'required|string',
            'pertanyaan_orang_tua' => 'required|string',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            Monitoring::create([
                'anak_id' => $request->anak_id,
                'berat_badan' => $request->berat_badan,
                'tinggi_badan' => $request->tinggi_badan,
                'lingkar_kepala' => $request->lingkar_kepala,
                'kondisi_kesehatan' => $request->kondisi_kesehatan,
                'status_imunisasi' => $request->status_imunisasi,
                'pertanyaan_orang_tua' => $request->pertanyaan_orang_tua,
                'created_at' => now()
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data monitoring berhasil disimpan.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.',
            ], 500);
        }
    }

    public function _edit_monitoring(Request $request)
    {
        $messages = [
            'anak_id.required' => 'Nama anak wajib dipilih.',
            'berat_badan.required' => 'Berat badan wajib diisi.',
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'tinggi_badan.required' => 'Tinggi badan wajib diisi.',
            'tinggi_badan.numeric' => 'Tinggi badan harus berupa angka.',
            'lingkar_kepala.required' => 'Lingkar kepala wajib diisi.',
            'lingkar_kepala.numeric' => 'Lingkar kepala harus berupa angka.',
            'kondisi_kesehatan.required' => 'Kondisi kesehatan wajib diisi.',
            'status_imunisasi.required' => 'Status imunisasi wajib diisi.',
            'pertanyaan_orang_tua.required' => 'Pertanyaan orang tua wajib diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'anak_id' => 'required|exists:anak,id',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lingkar_kepala' => 'required|numeric',
            'kondisi_kesehatan' => 'required|string',
            'status_imunisasi' => 'required|string',
            'pertanyaan_orang_tua' => 'required|string',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $monitoring = Monitoring::find($request->id);

            if (!$monitoring) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data monitoring tidak ditemukan.'
                ], 404);
            }

            $monitoring->update([
                'anak_id' => $request->anak_id,
                'berat_badan' => $request->berat_badan,
                'tinggi_badan' => $request->tinggi_badan,
                'lingkar_kepala' => $request->lingkar_kepala,
                'kondisi_kesehatan' => $request->kondisi_kesehatan,
                'status_imunisasi' => $request->status_imunisasi,
                'pertanyaan_orang_tua' => $request->pertanyaan_orang_tua,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data monitoring berhasil diperbarui.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.',
            ], 500);
        }
    }

    public function _delete_monitoring($id)
    {
        try {
            $monitoring = Monitoring::findOrFail($id);
            $monitoring->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus.'
            ], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
