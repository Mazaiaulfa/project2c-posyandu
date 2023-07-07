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
        'gambar' => 'required',
    ]);
   
    // Simpan data anak ke database
    Petugas::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data petugas berhasil disimpan.');
}
}
