@extends('parts/part')

@section('cdn')

    <table class="table table-bordered table-striped" style="text-align: center">
        <tr class="table-danger">
            <th>NRP</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>
        @foreach ($mahasiswa as $x)
            <tr>
                <td>{{ $x->nrp }}</td>
                <td>{{ $x->nama }}</td>
                <td>{{ $x->kelas }}</td>
                <td>{{ $x->jurusan }}</td>
                <td>{{ $x->ipk }}</td>
            </tr>
        @endforeach
    </table>

@endsection
