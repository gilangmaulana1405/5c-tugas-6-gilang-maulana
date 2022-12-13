<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function create(){
        $data = Berita::all();
        return view('komentar.create', ['beritas' => $data]);
    }

    public function store(Request $request){
        // $berita_id = Komentar::find($request->berita_id);

        $komentar = new Komentar();
        $komentar->berita_id = $request->input('berita_id');
        $komentar->komenan = $request->input('komenan');
        // $komentar->berita()->associate($berita_id);
        $komentar->save();

        return redirect()->route('berita.index');
    }
}
