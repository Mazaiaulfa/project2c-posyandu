<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Anak extends Controller
{
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
}

