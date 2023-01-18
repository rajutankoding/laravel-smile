<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelUNAB extends Model
{
    use HasFactory;

    protected $table = "tabel_unab";
    protected $fillable = [
        'id_toko', 'nama_toko', 'alamat_toko',  'id_barang', 'stok_barang',
    ];
}
