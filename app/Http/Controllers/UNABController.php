<?php

namespace App\Http\Controllers;

use App\Imports\DataBarang;
use App\Imports\DataStokUnab;
use App\Imports\DataUnab;
use App\Imports\PenjualanUNAB;
use App\Models\TabelUNAB;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UNABController extends Controller
{
    public function importPenjualanUNAB(Request $request)
    {
        $file = $request->file('excel');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataUNAB', $namaFile);

        Excel::import(new PenjualanUNAB, public_path('/DataUNAB/' . $namaFile));
        return back()->withStatus('Data berhasil diunggah.');
    }

    // Import Data
    public function importStok(Request $request)
    {
        $file = $request->file('excel');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataUNAB', $namaFile);

        Excel::import(new DataStokUnab, public_path('/DataUNAB/' . $namaFile));
        return back()->withStatus('Data berhasil diunggah.');
    }
    public function importBarang(Request $request)
    {
        $file = $request->file('excel');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataUNAB', $namaFile);

        Excel::import(new DataBarang, public_path('/DataUNAB/' . $namaFile));
        return back()->withStatus('Data berhasil diunggah.');
    }
    public function importData(Request $request)
    {
        $file = $request->file('excel');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataUNAB', $namaFile);

        Excel::import(new DataUnab, public_path('/DataUNAB/' . $namaFile));
        return back()->withStatus('Data berhasil diunggah.');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = TabelUNAB::all();
        return view('toko.index', ["barang" => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
