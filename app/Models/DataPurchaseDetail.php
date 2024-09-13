<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPurchaseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pengajuan',
        'br_id',
        'qty',
        'periode',
        'start_date',
        'harga',
        'login'
    ];
}
