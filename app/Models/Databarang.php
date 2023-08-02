<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databarang extends Model
{
    use HasFactory;
    protected $table = 'databarang';
    protected $fillable = ['id','nama_barang','deskripsi', 'stok'];
}
