<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class BarangMasukController extends Controller
{
    public function index()
    {
        return view('transaksi.index');
        // $barangMasuk = BarangMasuk::all();
        // return view('barangmasuk.index', compact('barangMasuk'));
    }

    // Menampilkan form untuk membuat barang masuk baru
    public function create()
    {
        return view('barangmasuk.create');
    }

    // Menyimpan data barang masuk baru ke dalam basis data
    public function store(Request $request)
    {
        $validatedData = $request->validate(BarangMasuk::rules());

        BarangMasuk::create($validatedData);

        return redirect()->route('barangmasuk.index')->with('success', 'Barang masuk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data barang masuk
    public function edit(BarangMasuk $barangMasuk)
    {
        return view('barangmasuk.edit', compact('barangMasuk'));
    }

    // Memperbarui data barang masuk di basis data
    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        $validatedData = $request->validate(BarangMasuk::rules());

        $barangMasuk->update($validatedData);

        return redirect()->route('barangmasuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    // Menghapus data barang masuk dari basis data
    public function destroy(BarangMasuk $barangMasuk)
    {
        $barangMasuk->delete();

        return redirect()->route('barangmasuk.index')->with('success', 'Barang masuk berhasil dihapus.');
    }
}
