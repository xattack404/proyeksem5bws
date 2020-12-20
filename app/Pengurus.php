<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';    
    protected $fillable = [
        'nama_pengurus',
        'tempat_lahir',
        'tgl_lahir',
        'pendidikan_terakhir',
        'deskripsi',
        'foto'
    ];

    public $timestamps = false;
}
