<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TebusGadai extends Model
{
    use HasFactory;

    protected $fillable = [
        'gadai_id',
        'jumlah_bayar',
        'tanggal_bayar',
        'status',
    ];

    public function gadai()
    {
        return $this->belongsTo(Gadai::class);
    }
}
