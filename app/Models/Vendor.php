<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_vendor',
        'jenis_vendor',
        'nama_vendor',
        'alamat',
        'contact_person',
        'no_telp',
        'npwp',
        'status_pkp',
        'category',
        'list_product',
        'list_jasa',
        'input_by',
        'update_by'
    ];
}
