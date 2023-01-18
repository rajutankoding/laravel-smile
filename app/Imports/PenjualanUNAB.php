<?php

namespace App\Imports;

use App\Models\DataBarang;
use App\Models\PenjualanUNAB as ModelsPenjualanUNAB;
use Maatwebsite\Excel\Concerns\ToModel;

class PenjualanUNAB implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PenjualanUNAB([
            'item_code' => $row[0],
            'quantity' => $row[1],
            // haruse HPP
            'pph' => $row[2],
            'harga_jual_struk' => $row[3],
            'diskon_detail' => $row[4],
            'jual_setelah_diskon' => $row[5],
            'ppn_detail' => $row[6],
        ]);
    }
}
