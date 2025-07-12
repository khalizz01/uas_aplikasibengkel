<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jns_kendaraan';

    protected $fillable = [
        'id',
        'nm_jns_kendaraan',
    ];
}
