<?php

namespace App\Imports;

use App\Models\BarangModel;
use Maatwebsite\Excel\Concerns\ToModel;

class DataBarang implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BarangModel([
            'item_code' => $row[0],
            'item_name' => $row[1],
            'supplier_code' => $row[2],
            'uom' => $row[3],
            'buying_price' => $row[4],
            'last_buying_price' => $row[5],
            'selling_price' => $row[6],
        ]);
    }
}
