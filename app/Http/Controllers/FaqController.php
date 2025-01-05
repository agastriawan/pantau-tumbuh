<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function faq()
    {
        return view('admin/faq/list');
    }

    public function tambah_faq()
    {
        return view('admin/faq/add');
    }

    public function edit_faq($id)
    {
        $faq = Faq::findOrFail($id);

        $data = [
            "faq" => $faq,
        ];

        return view('admin/faq/edit', $data);
    }

    public function _list_faq()
    {
        $faq = Faq::get();

        $data = $faq->map(function ($item) {
            return [
                'judul' => $item->judul,
                'id' => $item->id,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function _tambah_faq(Request $request)
    {   
        $messages = [
            'judul.required' => 'Judul wajib diisi.',
            'isi.required' => 'Isi faq wajib diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'isi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            Faq::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Disimpan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.',
            ], 500);
        }
    }

    public function _edit_faq(Request $request)
    {
        if ($request->image === '') {
            $request->merge(['image' => null]);
        }

        $messages = [
            'judul.required' => 'Judul wajib diisi.',
            'isi.required' => 'Isi faq wajib diisi.',
        ];
    
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'isi' => 'required',
        ], $messages);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            $faq = Faq::findOrFail($request->id); 
    
            $faq->judul = $request->judul;
            $faq->isi = $request->isi;
            $faq->save();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.',
            ], 500);
        }
    }
    
    public function _delete_faq($id)
    {
        try {
            $faq = Faq::findOrFail($id);
            $faq->delete();

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
