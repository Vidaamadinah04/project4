@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Barang </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('barang.index') }}">
                        @csrf

                        <div class="form-group">
                            <label for="id_barang">ID Barang</label>
                            <input id="id_barang" type="text" class="form-control" name="id_barang" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input id="nama_barang" type="text" class="form-control" name="nama_barang" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Barang</label>
                            <input id="deskripsi" type="text" class="form-control" name="deskripsi" required>
                        </div>
                      

                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input id="stok" type="number" class="form-control" name="stok" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection