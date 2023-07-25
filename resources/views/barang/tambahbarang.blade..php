@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Barang</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('gudang.simpan_barang') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>
                            @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_barang">Deskripsi Barang</label>
                            <textarea id="deskripsi_barang" class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" required>{{ old('deskripsi_barang') }}</textarea>
                            @error('deskripsi_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stok_barang">Stok Barang</label>
                            <input id="stok_barang" type="number" class="form-control @error('stok_barang') is-invalid @enderror" name="stok_barang" value="{{ old('stok_barang') }}" required>
                            @error('stok_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('gudang.daftar_barang') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
