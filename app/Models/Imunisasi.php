<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    protected $table = 'imunisasis';
    protected $fillable = ['nama', 'umur', 'tanggal', 'nama_imunisasi', 'keterangan'];

}
