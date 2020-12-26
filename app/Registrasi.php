<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BiayaPendaftaran;
use App\DetailRegistrasi;

class Registrasi extends Model
{
    protected $table = 'registrasi';
    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'email',
        'no_telp',
        'alamat',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'kode_pos',
        'foto',
        'pendidikan_terakhir',
        'asal_sekolah',
        'tahun_lulus',
        'file_ijazah'
    ];
    public $timestamps = true;

    public function jejang()
    {
        return $this->belongsTo(BiayaPendaftaran::class, 'pendidikan_terakhir');
    }
    public function relasidetail()
    {
        return $this->hasOne(DetailRegistrasi::class, 'id_registrasi', 'id');
    }
}
