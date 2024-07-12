<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMontir extends Model
{
    use HasFactory;

    protected $table = "KategoriMontir";

    protected $fillable = [
        'nama'
    ];
}