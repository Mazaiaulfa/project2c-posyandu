<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $anaks = Anak::all();
        return view('lihat')->with('anaks',$anaks);
    }
}



