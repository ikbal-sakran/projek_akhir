<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'jumlah',
        'jenis_transaksi',
        'keterangan',
        'metode_pembayaran',
        'id_event'
    ];
}
