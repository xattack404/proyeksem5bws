<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'biaya_pendaftaran';    
    protected $fillable = [
        'jejang_didik',
        'harga_kitab',
        'harga_seragam'
    ];

    public $timestamps = false;
}
