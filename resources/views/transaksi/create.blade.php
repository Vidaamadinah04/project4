@extends('layouts.app')

@section('content')
{{-- <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true"> --}}

    <div class="col-11 text-end justify-content-end">
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Barang Masuk</a>
    </div>

    <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Tambah Barang Masuk') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
