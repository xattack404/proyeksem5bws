<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registrasi;

class santriaktif extends Model
{
    protected $table = 'santri_aktif';
    protected $fillable = [
        'nisn_santri'

    ];
    public $timestamps = true;

    public function relasi()
    {
        return $this->hasOne(Registrasi::class, 'nisn', 'nisn_santri');
    }
}
