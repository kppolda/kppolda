<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hambatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_polres',
        'jenis',
        'hambatan',
        'saran',
        'kesimpulan',
    ];
}
