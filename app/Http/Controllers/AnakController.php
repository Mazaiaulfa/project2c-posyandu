<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\resources\view;

class AnakController extends Controller
{ 
    public function index()
    {
       $anaks = Anak::all();
       return view('dataanak')->with('anaks',$anaks);
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
            'berat' => 'required',
            'tinggi_badan' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        // Simpan data anak ke database
        Anak::create($validatedData);

        // Redirect atau kembalikan respon yang sesuai
        return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
    }
    public function edit($id)
{
    $anak = Anak::findOrFail($id);
    return view('dataanak', compact('anak'));
}

public function update(Request $request, $id)
{
    $anak = Anak::findOrFail($id);

    $anak->nama = $request->input('nama');
    $anak->tempat_lahir = $request->input('tempat_lahir');
    $anak->alamat = $request->input('alamat');
    $anak->nama_ortu = $request->input('nama_ortu');
    $anak->berat = $request->input('berat');
    $anak->tinggi_badan = $request->input('tinggi_badan');
    $anak->umur = $request->input('umur');
    $anak->jenis_kelamin = $request->input('jenis_kelamin');

    $anak->save();

    return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
}
public function destroy($id)
{
    $anak = Anak::findOrFail($id);
    $anak->delete();

    return redirect()->back()->with('success', 'Anak berhasil dihapus');
}
public function show($id)
{
    $anak = Anak::findOrFail($id);
    return view('anak.show', compact('anak'));
}

}
