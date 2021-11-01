@extends('parts/part')

@section('cdn')
<table class="table table-bordered table-striped table-danger">
    <tr class="bg-danger">
        <th>ID</th>
        <th>Barang</th>
        <th>Jumlah</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Harga</th>
    </tr>
@foreach (tampilfasilitas() as $x)<?php //tampil fasilitas dari fungsi helper ?>
    <tr>
        <td>{{ $x->id }}</td>
        <td>{{ $x->barang }}</td>
        <td>{{ $x->jumlah }}</td>
        <td>{{ $x->deskripsi }}</td>
        <td>{{ $x->gambar }}</td>
        <td>{{ $x->harga }}</td>
    </tr>
@endforeach
</table>
<table width="100%" style="text-align:right">
    <tr>
        <td>
            <a href="/fasilitas/manage" class="btn btn-success" style="">Manage</a>
        </td>
    </tr>
</table>

@endsection
