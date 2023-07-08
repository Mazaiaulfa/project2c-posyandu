<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class PetugasController extends Controller
{
    public function datapetugas()
    {
       $petugasdatas = Petugas::all();
        return view('datapetugas')->with('petugasdatas',$petugasdatas);
    }
    public function store6(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
    ]);
   
    // Simpan data anak ke database
    Petugas::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data petugas berhasil disimpan.');
}
public function edit4($id)
{
    $petugasdata = Petugas::findOrFail($id);
    return view('datapetugas', compact('petugas'));
}

public function update4(Request $request, $id)
{
    $petugasdata = Petugas::findOrFail($id);

    $petugasdata->nama = $request->input('nama');
    $petugasdata->email = $request->input('email');
    $petugasdata->alamat = $request->input('alamat');
    $petugasdata->no_hp = $request->input('no_hp');
    $petugasdata->save();

    return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
}
public function destroy4($id)
{
    $petugasdata = Petugas::findOrFail($id);
    $petugasdata->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus');
}
public function show4($id)
{
    $petugasdata = Petugas::findOrFail($id);
    return view('petugas.show', compact('petugas'));
}
}
