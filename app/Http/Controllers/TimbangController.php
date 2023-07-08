<?php

namespace App\Http\Controllers;

use App\Models\Timbang;
use Illuminate\Http\Request;

class TimbangController extends Controller
{
    public function datatimbang()
    {
       $timbangdatas = Timbang::all();
       return view('timbangan')->with('timbangdatas',$timbangdatas);
    }
    public function store4(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'tanggal' => 'required',
        'hasil_timbangan' => 'required',
        'keterangan' => 'required',
    ]);

    // Simpan data anak ke database
    Timbang::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data petugas berhasil disimpan.');
}
public function edit5($id)
{
    $timbangdata = Timbang::findOrFail($id);
    return view('timbangan', compact('timbang'));
}

public function update5(Request $request, $id)
{
    $timbangdata = Timbang::findOrFail($id);

    $timbangdata->nama = $request->input('nama');
    $timbangdata->umur = $request->input('umur');
    $timbangdata->tanggal = $request->input('tanggal');
    $timbangdata->hasil_timbangan = $request->input('hasil_timbangan');
    $timbangdata->keterangan = $request->input('keterangan');
    $timbangdata->save();

    return redirect()->back()->with('success', 'Data berhasil disimpan.');
}
public function destroy5($id)
{
    $petugasdata = Timbang::findOrFail($id);
    $petugasdata->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus');
}
public function show5($id)
{
    $petugasdata = Timbang::findOrFail($id);
    return view('timbang.show', compact('timbang'));
}
}
