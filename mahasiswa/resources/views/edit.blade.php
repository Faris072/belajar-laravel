@extends('parts/part')

@section('cdn')
<div class="form">
    <form action="/pengaturan/{{ $data->nrp }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" value="{{ $data->nama }}">
        <br>
        <label for="kelas">Kelas:</label>
        <select name="kelas" id="kelas" class="form-control">
            <option value="D3PJJTI-A" {{ ($data->kelas == 'D3PJJTI-A') ? 'selected' : '' }}>D3PJJTI-A</option>
            <option value="D3PJJTI-B" {{ ($data->kelas == 'D3PJJTI-B') ? 'selected' : '' }}>D3PJJTI-B</option>
        </select>
        <br>
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control">
            <option value="Teknik Informatika" {{ ($data->jurusan == 'Teknik Informatika') ? 'selected' : '' }}>Teknik Informatika</option>
            <option value="Listrik" {{ ($data->jurusan == 'Listrik') ? 'selected' : '' }}>Listrik</option>
            <option value="Robotika" {{ ($data->jurusan == 'Robotika') ? 'selected' : '' }}>Robotika</option>
        </select>
        <br>
        <label for="ipk">IPK</label>
        <input type="number" id="ipk" name="ipk" class="form-control" value="{{ $data->ipk }}">
        <br>
        <input type="submit" class="btn btn-success form-control" value="Submit">
    </form>
</div>
@endsection

