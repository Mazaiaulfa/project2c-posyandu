<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function datajadwal()
    {
       $jadwallls = Jadwal::all();
        return view('jadwalposyandu')->with('jadwallls',$jadwallls);
    }
    public function store8(Request $request)
    {
    $validatedData = $request->validate([
        'tahun' => 'required',
        'bulan' => 'required',
        'tanggal' => 'required',
        'tema' => 'required',
    ]);

    // Simpan data anak ke database
    Jadwal::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
}
}
