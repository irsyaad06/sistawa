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
        'day_3',
        'barang_1_day_1',
        'barang_2_day_1',
        'barang_3_day_1',
        'barang_4_day_1',
        'barang_5_day_1',

        'barang_1_day_2',
        'barang_2_day_2',
        'barang_3_day_2',
        'barang_4_day_2',
        'barang_5_day_2',

        'barang_1_day_3',
        'barang_2_day_3',
        'barang_3_day_3',
        'barang_4_day_3',
        'barang_5_day_3',
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
