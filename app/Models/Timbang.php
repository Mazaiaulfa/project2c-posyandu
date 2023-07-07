<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timbang extends Model
{
    protected $table = 'timbangdatas';
    protected $fillable = ['nama', 'umur', 'tanggal', 'hasil_timbangan','keterangan'];
}
