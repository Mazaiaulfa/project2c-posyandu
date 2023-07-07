<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ibu extends Model
{
    protected $table = 'ibus';
    protected $fillable = ['nama', 'tempat_lahir', 'alamat', 'status', 'no_kk', 'no_bpjs', 'no_hp', 'keterangan'];

}
