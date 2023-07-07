<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function dataibu()
    {
       $ibus = ibu::all();
        return view('dataibu')->with('ibus',$ibus);
    }
    public function store2(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'alamat' => 'required',
        'status' => 'required',
        'no_kk' => 'required',
        'no_bpjs' => 'required',
        'no_hp' => 'required',
        'keterangan' => 'required',
    ]);

    // Simpan data anak ke database
    ibu::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
}
public function edit1($id)
{
    $ibu = ibu::findOrFail($id);
    return view('dataibu', compact('ibu'));
}

public function update1(Request $request, $id)
{
    $ibu = ibu::findOrFail($id);
    $ibu->nama = $request->input('nama');
    $ibu->tempat_lahir = $request->input('tempat_lahir');
    $ibu->alamat = $request->input('alamat');
    $ibu->status = $request->input('status');
    $ibu->no_kk = $request->input('no_kk');
    $ibu->no_bpjs = $request->input('no_bpjs');
    $ibu->no_hp = $request->input('no_hp');
    $ibu->keterangan = $request->input('keterangan');

    $ibu->save();

    return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
}
    public function destroy1($id)
    {
        $ibu = ibu::findOrFail($id);
        $ibu->delete();

        return redirect()->back()->with('success', 'Ibu berhasil dihapus');
    }
    public function show1($id)
    {
        $ibu = ibu::findOrFail($id);
        return view('ibu.show', compact('ibu'));
    }
}