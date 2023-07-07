<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{public function dataimunisasi()
    {
       $imunisasi = Imunisasi::all();
        return view('dataimunisasi')->with('imunisasis',$imunisasi);
    }
    public function store3(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'tanggal' => 'required',
        'nama_imunisasi' => 'required',
        'keterangan' => 'required',
    ]);

    // Simpan data anak ke database
    Imunisasi::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
}
public function edit2($id)
{
    $imunisasi = Imunisasi::findOrFail($id);
    return view('dataimunisasi', compact('imunisasi'));
}

public function update2(Request $request, $id)
{
    $imunisasi = Imunisasi::findOrFail($id);

    $imunisasi->nama = $request->input('nama');
    $imunisasi->umur = $request->input('umur');
    $imunisasi->tanggal = $request->input('tanggal');
    $imunisasi->nama_imunisasi = $request->input('nama_imunisasi');
    $imunisasi->keterangan= $request->input('keterangan');

    $imunisasi->save();

    return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
}
public function destroy2($id)
{
    $imunisasi = Imunisasi::findOrFail($id);
    $imunisasi->delete();

    return redirect()->back()->with('success', 'Anak berhasil dihapus');
}
public function show2($id)
{
    $imunisasi = Imunisasi::findOrFail($id);
    return view('imunisasi.show', compact('imunisasi'));
}


}
