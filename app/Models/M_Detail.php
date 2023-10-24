<?php

// File: app/Models/M_Detail.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Detail extends Model
{
    protected $table = "details";
    protected $fillable = [
        'dk',
        'jumlah',
        'transaksi_id', // Pastikan foreign key disertakan di sini
    ];

    public function transaksi()
    {
        return $this->belongsTo(M_Transaksi::class, 'transaksi_id'); // Sesuaikan dengan nama foreign key yang benar
    }
}

