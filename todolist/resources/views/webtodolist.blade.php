<!doctype html>
<html lang="id">
<head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <div class="container">
        <a href="/todolist/create" class="btn btn-success">Tambah mahasiswa</a>
        <table cellpadding="10" width="100%" cellspacing="0" border="1">
            <tr style="text-align: center">
                <th>ID</th>
                <th>NRP</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End date</th>
                <th>Job</th>
                <th>Description</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach($data as $alldata)
            <tr>
                <td>{{ $alldata->id }}</td>
                <td>{{ $alldata->nrp }}</td>
                <td>{{ $alldata->name }}</td>
                <td>{{ $alldata->start_date }}</td>
                <td>{{ $alldata->end_date }}</td>
                <td>{{ $alldata->job }}</td>
                <td>{{ $alldata->description }}</td>
                <td><a href="/todolist/{{ $alldata->id }}/edit" class="btn btn-warning">Edit</a></td>
                <form action="/todolist/{{ $alldata->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <td><input type="submit" class="btn btn-danger" value="Hapus"></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
