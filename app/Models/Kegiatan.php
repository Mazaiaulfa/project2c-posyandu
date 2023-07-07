<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = ['kegiatan', 'nama_tamu', 'tanggal', 'waktu', 'keterangan'];

}
