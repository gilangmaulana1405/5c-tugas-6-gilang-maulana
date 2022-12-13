<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $beritas = Berita::with('komentar')->get();
        return view('berita.index', ['beritas' => $beritas]);
    }

    public function create(){
        return view('berita.create');
    }

    public function store(Request $request){
        $berita = new Berita();
        $berita->nama = $request->input('nama');
        $berita->save();

        return redirect()->route('berita.index');
    }
}
