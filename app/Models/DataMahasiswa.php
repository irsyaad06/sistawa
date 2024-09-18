<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;

    protected $table = "data_mahasiswa";

    protected $fillable = [
        'nim',
        'nama',
        'kelompok',
        'day_1',
        'day_2',
        'day_3'
    ];

    public function izinKehadiran()
    {
        return $this->hasMany(IzinKehadiran::class, 'nim', 'nim');
    }

    public function barangSitaan()
    {
        return $this->hasMany(BarangSitaan::class, 'nim', 'nim');
    }
}
