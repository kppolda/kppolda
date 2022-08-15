<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'id_polres',
        'sumber',
        'jml_barang',
        'kondisi_bb',
        'kondisi_rr',
        'kondisi_rb',
        'keterangan',
    ];
}
