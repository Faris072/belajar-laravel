@extends('parts/part')

@section('cdn')
    <form action="/fasilitas/manage" method="POST">
        @csrf
        @method('PUT')
        <label for="barang">Nama Barang</label>
        <input type="text" name="barang" id="barang" class="form-control" value="{{ $edit->barang }}" placeholder="Masukkan Nama Barang...">
        <br><br>
        <label for="jumlah">jumlah</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $edit->jumlah }}" placeholder="Masukkan jumlah Barang...">
        <br><br>
        <label for="deskripsi">Nama Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" value="{{ $edit->deskripsi }}" placeholder="Masukkan deskripsi fasilitas..."></textarea>
        <br><br>
        <label for="gambar">Input Gambar</label><br>
        <input type="file" name="gambar" id="gambar" value="{{ $edit->gambar }}" class="btn btn-primary">
        <br><br>
        <label for="harga">Harga:</label><br>
        <button id="btn1" class="btn btn-warning harga" value="50000">Rp50000</button>
        <button id="btn2" class="btn btn-warning harga" value="100000">Rp100000</button>
        <button id="btn3" class="btn btn-warning harga" value="150000">Rp150000</button>
        <button id="btn4" class="btn btn-warning harga" value="200000">Rp200000</button>
        <button id="btn5" class="btn btn-warning harga" value="250000">Rp250000</button>
        <input type="number" name="harga" id="Harga" class="form-control"  value="{{ $edit->harga }}" placeholder="Masukkan Harga Lain...">
        <br><br>
        <input type="submit" name="submit" class="form-control btn btn-success" value="Tambah Fasilitas">
    </form>
    <br><br>
@endsection
