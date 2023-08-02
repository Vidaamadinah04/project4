<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    // protected $table = 'barang_masuk';
    // protected $fillable = ['id_barang', 'nama_barang', 'tanggal_masuk', 'jumlah_barang'];

    protected $table = 'barang_masuk';
    protected $fillable = ['id_barang', 'nama_barang', 'tanggal_masuk', 'jumlah_barang'];

    public static function rules()
    {
        return [
            'id_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'jumlah_barang' => 'required|integer|min:1',
        ];
    }

}
