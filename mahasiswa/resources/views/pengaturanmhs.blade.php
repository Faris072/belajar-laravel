@extends('parts/part')

@section('cdn')

    <a href="/pengaturan/create" class="btn btn-success">Tambah Mahasiswa</a>
    <br>
    <table class="table table-bordered table-striped" style="text-align: center">
        <tr class="table-danger">
            <th>NRP</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach ($mahasiswa as $x)
            <tr>
                <td>{{ $x->nrp }}</td>
                <td>{{ $x->nama }}</td>
                <td>{{ $x->kelas }}</td>
                <td>{{ $x->jurusan }}</td>
                <td>{{ $x->ipk }}</td>
                <td class="px-0"><a href="/pengaturan/{{ $x->nrp }}/edit" class="btn btn-warning">Edit</a></td>
                <td class="px-0">
                    <form action="/pengaturan/{{ $x->nrp }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Hapus">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
