<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul',
        'seo_berita',
        'isi',
        'gambar',
        'kategori'
    ];

    public $timestamps = true;
}
