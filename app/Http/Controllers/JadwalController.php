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
public function edit3($id)
{
    $imunisasi = Jadwal::findOrFail($id);
    return view('jadwalposyandu', compact('jadwal'));
}

public function update3(Request $request, $id)
{
    $jadwalll = Jadwal::findOrFail($id);

    $jadwalll->tahun = $request->input('tahun');
    $jadwalll->bulan = $request->input('bulan');
    $jadwalll->tanggal = $request->input('tanggal');
    $jadwalll->tema = $request->input('tema');

    $jadwalll->save();

    return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
}
public function destroy3($id)
{
    $jadwalll = Jadwal::findOrFail($id);
    $jadwalll->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus');
}
public function show3($id)
{
    $jadwalll = Jadwal::findOrFail($id);
    return view('jadwal.show', compact('jadwal'));
}
}
