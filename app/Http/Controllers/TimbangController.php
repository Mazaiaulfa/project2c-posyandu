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
}
