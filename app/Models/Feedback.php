<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'rekaman_monitoring_id',
        'isi_feedback',
        'surat_rujukan',
        'modul_kesehatan',
    ];
}
