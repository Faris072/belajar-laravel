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
            <form action="/todolist" method="POST">
                @csrf
                <center><h2>Form Kuliah</h2></center>
                <label for="nrp">NRP: <span style="color:red;">*</span></label>
                <input type="number" name="nrp" id="nrp" class="form-control @error('nrp') is-invalid @enderror" required>
                <small style="color:red;">@error('nrp') Masukkan NRP 9 digit @enderror</small><!-- '@+error' untuk mengechek jika nrp yang di validasi di input dengan data yang tidak sesuai dengan validasi maka akan di tambahkan string is-invalid -->
                <br><br>
                <label for="nama">Nama: <span style="color:red;">*</span></label>
                <input type="text" name="name" id="nama" class="form-control @error('name') is-invalid @enderror" required>
                <small class="text-muted" style="color:red;">@error('name') Masukkan name! @enderror</small>
                <br><br>
                <label for="startDate">Start Date: <span style="color:red;">*</span></label>
                <input type="date" name="startDate" id="startDate" class="form-control" required>
                <small class="text-muted">Masukkan tanggal Start Date anda</small>
                <br><br>
                <label for="endDate">End Date:</label>
                <input type="date" name="endDate" id="endDate" class="form-control">
                <small class="text-muted">Masukkan tanggal End date anda (Optional)</small>
                <br><br>
                <label for="job">job: <span style="color:red;">*</span></label>
                <input type="text" name="job" id="job" class="form-control @error('nrp') is-invalid @enderror">
                <small class="text-muted" style="color:red;">@error('job') Masukkan JOB! @enderror</small>
                <br><br>
                <label for="description">Description: <span style="color:red;">*</span></label>
                <textarea name="description" id="description" class="form-control" rows="10"></textarea>
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
