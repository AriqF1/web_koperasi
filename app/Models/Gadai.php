<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadai extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_barang',
        'estimasi_harga',
        'jumlah_pinjaman',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tebusGadai()
    {
        return $this->hasOne(TebusGadai::class);
    }
}
