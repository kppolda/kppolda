<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Personil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_personil',
        'nrp_personil',
        'polres',
        'pangkat_personil',
        'jabatan_personil',
        'pendidikan_dikum',
        'pendidikan_dikbang',
    ];
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
