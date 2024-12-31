<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'foto',
    ];
}
