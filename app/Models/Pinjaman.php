<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'jumlah_pinjaman',
        'tenor',
        'bunga',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function angsuran()
    {
        return $this->hasMany(AngsuranPinjaman::class);
    }
}
