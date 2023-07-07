<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
       $kegiatans = Kegiatan::all();
        return view('kegiatan')->with('kegiatans',$kegiatans);
    }
    public function store5(Request $request)
    {
    $validatedData = $request->validate([
        'kegiatan' => 'required',
        'nama_tamu' => 'required',
        'tanggal' => 'required',
        'waktu' => 'required',
        'keterangan' => 'required',
    ]);

    // Simpan data anak ke database
    Kegiatan::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
}

}
