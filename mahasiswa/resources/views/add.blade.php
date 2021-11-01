@extends('parts/part')

@section('cdn')
<div class="form">
    <form action="/pengaturan" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control">
        <br>
        <label for="kelas">Kelas:</label>
        <select name="kelas" id="kelas" class="form-control">
            <option value="D3PJJTI-A">D3PJJTI-A</option>
            <option value="D3PJJTI-B">D3PJJTI-B</option>
        </select>
        <br>
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Listrik">Listrik</option>
            <option value="Robotika">Robotika</option>
        </select>
        <br>
        <label for="ipk">IPK</label>
        <input type="number" id="ipk" name="ipk" class="form-control">
        <br>
        <input type="submit" class="btn btn-success form-control" value="Submit">
    </form>
</div>
@endsection

