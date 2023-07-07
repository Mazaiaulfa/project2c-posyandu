<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anaks';
    protected $fillable = ['nama', 'tempat_lahir', 'alamat', 'nama_ortu', 'berat', 'tinggi_badan', 'umur', 'jenis_kelamin'];
}
