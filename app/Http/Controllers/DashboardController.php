<?php

namespace App\Http\Controllers;

use App\Imports\DataUnab;
use App\Models\BarangModel;
use App\Models\TabelUNAB;
use App\Models\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $toko = TokoModel::all();
        return view('dashboard.index', ['toko' => $toko]);
    }

    public function produks()
    {
        $toko = TokoModel::all();

        return view('pages.tables', ['toko' => $toko]);
    }

    public function toko()
    {
        $toko = TokoModel::all();

        return view('pages.tables', ['toko' => $toko]);
    }

    public function unab()
    {
        $tokos = DB::table('tabel_toko')
            ->get();

        $stok = DB::table('tabel_barang')
            ->join('tabel_unab', 'tabel_barang.item_code', '=', 'tabel_unab.id_barang')
            ->select('tabel_barang.*', 'tabel_unab.*')
            ->get();

        // $toko = $tokos->orderBy('id') == 1;
        $sorted = $stok->sortBy('stok_barang');
        return view('toko.index', ['barang' => $sorted]);
    }
    public function unsn($id)
    {
        $data = TabelUNAB::all();
        return view('toko.index', ["barang" => $data]);
    }
    public function cabang($id)
    {
        $data = TabelUNAB::all();
        return view('toko.index', ["barang" => $data]);
    }
}
