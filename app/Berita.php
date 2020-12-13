<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;

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
    public function relasiKategori()
    {

        return $this->belongsTo(Kategori::class, 'kategori');
    }
}
