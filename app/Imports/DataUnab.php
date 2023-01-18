<?php

namespace App\Imports;

use App\Models\TabelUNAB;

use Maatwebsite\Excel\Concerns\ToModel;

class DataUnab implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new TabelUNAB([
            'nama_toko' => $row[0],
            'id_barang' => $row[2],
            'stok_barang' => $row[3],
        ]);
    }
}
