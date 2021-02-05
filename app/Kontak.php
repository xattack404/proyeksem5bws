<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';    
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'email',
        'rekening',
        'nama_bank'
    ];

    public $timestamps = false;
}
