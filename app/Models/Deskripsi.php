<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{


    protected $fillable = [
        'deskripsi_aplikasi',
        'versi_aplikasi',
        'tanggal_dibuat',
    ];


    


}
