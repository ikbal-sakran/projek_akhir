<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class hutang_piutang extends Model
   { 
    use HasFactory;

    protected $fillable=[
        'nama_event',
        'jatuh_tempo_hutang_piutang',
        'pihak_kedua_hutang_piutang',
        'nominal_hutang_piutang',
        'status_hutang_piutang',
        'id_event'];


}