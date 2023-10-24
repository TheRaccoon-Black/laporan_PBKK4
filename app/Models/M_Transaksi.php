<?php

// File: app/Models/M_Transaksi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Transaksi extends Model
{
    use SoftDeletes;

    protected $table = "transaksis";
    protected $fillable = [
        'keterangan',
    ];

    public function details()
    {
        return $this->hasMany(M_Detail::class, 'transaksi_id'); // Sesuaikan dengan nama foreign key yang benar
    }
}
