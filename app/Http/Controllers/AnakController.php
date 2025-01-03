<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AnakController extends Controller
{
    public function anak()
    {
        return view('admin/anak/list');
    }

    public function tambah_anak()
    {
        return view('admin/anak/add');
    }

    public function edit_anak($id)
    {
        $anak = Anak::findOrFail($id); 
    
        $data = [
            "anak" => $anak
        ];
    
        return view('admin/anak/edit', $data); 
    }
    
    public function _list_anak(Request $request)
    {
        $anak = Anak::all();

        $data = [
            "data" => $anak
        ];

        return response()->json($data);
    }

    public function _tambah_anak(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'jenis_kelamin.required' => 'Jenis Kelamin telepon wajib diisi.',
            'foto.required' => 'Foto wajib diisi.',
            'foto.max' => 'Foto maksimal 10MB.',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $tanggalLahir = Carbon::createFromFormat('d-m-Y', $request->tanggal_lahir)->format('Y-m-d');

            $encryptedName = md5($request->nama . $request->tanggal_lahir);
            $fotoName = substr($encryptedName, 0, 40); 
            $fotoExtension = $request->file('foto')->getClientOriginalExtension();
            $fotoNameWithPrefix = time() . '_' . $fotoName; 
            $foto = $request->file('foto');
            $foto->move(public_path('foto_anak'), $fotoNameWithPrefix . '.' . $fotoExtension); 

            Anak::create([
                'nama' => $request->nama,
                'tanggal_lahir' => $tanggalLahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $fotoNameWithPrefix . '.' . $fotoExtension,
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

    public function _edit_anak(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi.',
            'foto.max' => 'Foto maksimal 10MB.',
        ];
    
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'nullable|max:10240',
        ], $messages);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            $tanggalLahir = Carbon::createFromFormat('d-m-Y', $request->tanggal_lahir)->format('Y-m-d');
    
            $anak = Anak::findOrFail($request->id);
    
            if ($request->hasFile('foto')) {
                if (file_exists(public_path('foto_anak/' . $anak->foto))) {
                    unlink(public_path('foto_anak/' . $anak->foto));
                }
    
                $foto = $request->file('foto');
                $encryptedName = md5($request->nama . $request->tanggal_lahir);
                $fotoName = substr($encryptedName, 0, 40); 
                $fotoExtension = $foto->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName; 
                $foto->move(public_path('foto_anak'), $fotoNameWithPrefix . '.' . $fotoExtension);
    
                $fotoNameWithPrefix = $fotoNameWithPrefix . '.' . $fotoExtension;
            } else {
                $fotoNameWithPrefix = $anak->foto;
            }

            $anak->update([
                'nama' => $request->nama,
                'tanggal_lahir' => $tanggalLahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $fotoNameWithPrefix,
            ]);
    
            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Diperbarui',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.',
            ], 500);
        }
    }

    public function _delete_anak($id)
    {
        try {
            $anak = Anak::findOrFail($id);
            $anak->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus.'
            ], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') { 
                return response()->json([
                    'message' => 'Data gagal dihapus karena Anak ini masih digunakan sebagai data pada menu Monitoring, silahkan hapus data Anak pada menu Monitoring dahulu.'
                ], 400);
            }
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
