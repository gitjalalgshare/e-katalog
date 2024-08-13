<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_jasa', 'nama_jasa', 'jenis_jasa', 'type_jasa', 'uom'];
}
