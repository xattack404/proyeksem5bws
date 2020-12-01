<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailRegistrasi extends Model
{
    protected $table = 'detail_registrasi';
    protected $fillable = [
        'id_registrasi',
        'no_kk',
        'nik_kepala_keluarga',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'status_ayah',
        'status_ibu',
        'scan_kk'
    ];
    public $timestamps = false;
}
