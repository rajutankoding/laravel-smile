<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = "tabel_barang";

    protected $fillable = [
        'item_code', 'item_name', 'supplier_code',  'uom', 'buying_price',  'last_buying_price',  'selling_price'
    ];

    public function joinunab()
    {
        $users = TabelUNAB::join('tabel_barang.item_code', '=', 'tabel_unab.id_barang')
            ->get(['tabel_barang.*', 'tabel_unab.stock']);
    }
}
