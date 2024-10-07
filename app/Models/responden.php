<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responden extends Model
{
    use HasFactory;

    protected $table = 'responden';

    protected $fillable = [
        'responden',
        'nama_poliklinik',
        'nama_dokter',
        'nama_pasien',
        'no_telp',
        'kritik_saran',
        'kd_responden'
    ];

    protected $guard = [
        'id'
    ];

    public $timestamps = false;
}
