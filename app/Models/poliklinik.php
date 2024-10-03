<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poliklinik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ruangan'
    ];

    protected $guard = [
        'id',
        'kode_ruangan'
    ];

    public $timestamps = false;

}
