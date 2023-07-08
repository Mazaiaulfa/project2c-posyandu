<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugasdatas';
    protected $fillable = ['nama', 'email', 'alamat', 'no_hp'];

}
