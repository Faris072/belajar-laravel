<!doctype html>
<html lang="id">

<head>
    <title>Home</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/7b5d20839a.js" crossorigin="anonymous"></script>
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Font Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

    <style>

    </style>
</head>

<body>

    <div class="container d-flex mb-5" style="height:100vh;">
        <div class="form m-auto py-5" style="width:75vw;">
            <form action="/todolist/{{ $edit->id }}" method="POST">
                @method('put')<!--Method put/patch untuk mengupdate supaya di route bisa di method patch-->
                @csrf
                <center><h2>Edit Form</h2></center>
                <label for="nrp">NRP: <span style="color:red;">*</span></label>
                <input type="number" name="nrp" id="nrp" class="form-control" value="{{ $edit->nrp }}" required>
                <small class="text-muted">Masukkan NRP mahasiswa anda</small>
                <br><br>
                <label for="nama">Nama: <span style="color:red;">*</span></label>
                <input type="text" name="name" id="nama" class="form-control" value="{{ $edit->name }}" required>
                <small class="text-muted">Masukkan nama lengkap anda</small>
                <br><br>
                <label for="startDate">Start Date: <span style="color:red;">*</span></label>
                <input type="date" name="startDate" id="startDate" class="form-control" value="{{ $edit->start_date }}" required>
                <small class="text-muted">Masukkan tanggal Start Date anda</small>
                <br><br>
                <label for="endDate">End Date:</label>
                <input type="date" name="endDate" id="endDate" class="form-control" value="{{ $edit->end_date }}">
                <small class="text-muted">Masukkan tanggal End date anda (Optional)</small>
                <br><br>
                <label for="job">job: <span style="color:red;">*</span></label>
                <input type="text" name="job" id="job" class="form-control" value="{{ $edit->job}}">
                <small class="text-muted">Masukkan Jurusan kuliah anda</small>
                <br><br>
                <label for="description">Description: <span style="color:red;">*</span></label>
                <textarea name="description" id="description" class="form-control" rows="10">{{ $edit->description }}"</textarea>
                <br><br>
                <input type="submit" class="form-control btn btn-primary">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
