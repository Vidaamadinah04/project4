<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.tambahbarangmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'tanggal_masuk' => 'required|date',
            'jumlah_barang' => 'required|integer|min:1',
        ]);

        // Simpan data ke dalam database
        BarangMasuk::create([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        return redirect()->route('transaksi.tambahbarangmasuk')->with('success', 'Data barang masuk berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

//     public function tambahBarangMasuk()
//     {
//         $barang = Barang::all();
//         return view('transaksi.tambahbarangmasuk', compact('barang'));
//     }



    public function barangkeluar(){
        return view('transaksi.barangkeluar');
    }
}

