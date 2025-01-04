<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\Kontak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PublikController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('user:id,nama')->limit(4)->get();
        $orangtua = User::where('role_id', 1)->count();
        $tenagamediscount = User::where('role_id', 2)->count();
        $faq = Faq::all();
        $tenagamedis = User::where('role_id', 2)->get();

        $data = [
            "artikels" => $artikel,
            "orangtua" => $orangtua,
            "tenagamediscount" => $tenagamediscount,
            "tenagamedis" => $tenagamedis,
            "faqs" => $faq,
        ];

        return view('index', $data);
    }

    public function artikel_kesehatan()
    {
        $artikel = Artikel::with('user:id,nama')->paginate(6);

        $data = [
            "artikels" => $artikel
        ];

        return view('artikel', $data);
    }

    public function artikel_detail($slug)
    {
        $artikel = Artikel::with('user:id,nama')->where('slug', $slug)->first();

        if (!$artikel) {
            return redirect()->route('notFound');
        }

        $data = [
            "artikels" => $artikel
        ];

        return view('artikel-detail', $data);
    }

    public function tentang_kami()
    {
        return view('about');
    }

    public function kontak_kami()
    {
        return view('contact');
    }

    public function _kontak(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Kontak::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'message' => $request->input('message'),
        ]);

        return back()->with('success', 'Pesan Anda berhasil dikirim!, Kami akan Membalasnya Via Email atau Nomor WhatsApp');
    }
}
