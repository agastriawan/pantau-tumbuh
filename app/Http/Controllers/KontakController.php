<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        return view('admin/kontak/list');
    }

    public function _list_kontak(Request $request)
    {
        $kontak = Kontak::all();

        $data = [
            "data" => $kontak
        ];

        return response()->json($data);
    }

    public function detail_kontak($id)
    {
        $kontak = Kontak::findOrFail($id);

        $data = [
            "kontak" => $kontak,
        ];

        return view('admin/kontak/detail', $data);
    }

    public function _delete_kontak($id)
    {
        try {
            $kontak = Kontak::findOrFail($id);
            $kontak->delete();

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
