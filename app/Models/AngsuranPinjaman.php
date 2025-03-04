<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngsuranPinjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'pinjaman_id',
        'jumlah_bayar',
        'tanggal_bayar',
        'status',
    ];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class);
    }
}
