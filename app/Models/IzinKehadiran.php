<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IzinKehadiran extends Model
{
    use HasFactory;

    protected $table = "izin_kehadiran";

    protected $fillable = [
        'nim',
        'tanggal',
        'keterangan',
        'foto'
    ];

    public function dataMahasiswa()
    {
        return $this->belongsTo(DataMahasiswa::class, 'nim', 'nim');
    }
}
