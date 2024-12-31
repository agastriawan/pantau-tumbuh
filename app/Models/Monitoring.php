<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $table = 'rekaman_monitoring';
    protected $fillable = [
        'anak_id',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'kondisi_kesehatan',
        'status_imunisasi',
        'pertanyaan_orang_tua',
    ];

    // Monitoring.php
    public function anak()
    {
        return $this->belongsTo(Anak::class, 'anak_id');
    }
}
