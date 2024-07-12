<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;

    protected $table = "DetailLayanan";

    protected $fillable = [
        'pekerjaan',
        'biaya',
        'layanan_id',
        'montir_id'
    ];
}