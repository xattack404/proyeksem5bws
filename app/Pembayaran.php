<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registrasi;


class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = [
        'no_invoice',
        'nisn',
        'total_pembayaran',
        'bukti_pembayaran'
    ];
    public $timestamps = true;

    public function registrasi()
    {
        return $this->belongsTo(Registrasi::class, 'nisn', 'nisn');
    }
}
