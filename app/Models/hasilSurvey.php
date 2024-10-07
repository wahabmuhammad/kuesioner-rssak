<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilSurvey extends Model
{
    use HasFactory;

    protected $table = 'hasilsurvey';

    protected $fillable = [
        'question',
        'kepuasan',
        'kdresponden_fk'
    ];

    protected $guard = [
        'id'
    ];

    public $timestamps = false;
}
