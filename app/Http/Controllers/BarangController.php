<?php

namespace App\Http\Controllers;

use App\Models\Databarang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databarang = Databarang::all();
        return view('barang.index', compact('databarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        

        // Redirect ke halaman index atau ke halaman lain yang sesuai setelah menghapus data.
        //
    }


    // public function jenisbarang()
    // {
    //     return view('barang.jenisbarang');
    // }
    
}
