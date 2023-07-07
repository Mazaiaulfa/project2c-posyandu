<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwallls';
    protected $fillable = ['tahun', 'bulan', 'tanggal', 'tema'];

}
