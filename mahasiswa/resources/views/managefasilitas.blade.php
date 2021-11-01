@extends('parts/part')

    @section('cdn')
    <a href="/fasilitas/manage/create" class="btn btn-success">Tambah Barang</a>
    <table class="table table-bordered table-striped table-danger text-center">
        <tr class="bg-danger">
            <th>ID</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
    @foreach ($fasilitas as $x)
        <tr>
            <td>{{ $x->id }}</td>
            <td>{{ $x->barang }}</td>
            <td>{{ $x->jumlah }}</td>
            <td>{{ $x->deskripsi }}</td>
            <td>{{ $x->gambar }}</td>
            <td>{{ $x->harga }}</td>
            <td class="px-0 mx-0"><a class="btn btn-warning" href="/fasilitas/manage/{{ $x }}/edit">Edit</a></td>
            <td class="px-0 mx-0">
                <form action="/fasilitas/manage/{{ $x->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" class="btn btn-danger" value="Hapus">
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
