<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangSitaan extends Model
{
    use HasFactory;

    protected $table = "barang_sitaan";

    protected $fillable = [
        'nim',
        'tanggal',
        'barang_sitaan',
        'foto',
    ];

    public function dataMahasiswa()
    {
        return $this->belongsTo(DataMahasiswa::class, 'nim', 'nim');
    }
}
