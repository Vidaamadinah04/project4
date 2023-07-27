@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Barang Masuk</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('transaksi.simpanbarangmasuk') }}">
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
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input id="tanggal_masuk" type="date" class="form-control" name="tanggal_masuk" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_barang">Jumlah Barang</label>
                            <input id="jumlah_barang" type="number" class="form-control" name="jumlah_barang" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
