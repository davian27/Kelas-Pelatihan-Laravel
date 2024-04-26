!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 3</title>
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/customs/style.css') }}">
</head>
<body>
    

    <div class="grid-center">
        <div class="card bg-primary text-light">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="text-center">Detail Siswa</h1>
                    <a href="{{ route('data-siswa.edit',$database->id)}}" class="btn btn-light">Ubah</a>
                    <a href="{{ route('data-siswa.index',$database->id)}}" class="btn btn-light">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>NIS  :</div>
                        <div>{{$database->nis}}</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>Nama :</div>
                        <div>{{$database->nama}}</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>Jenis Kelamin :</div>
                        <div>{{$database->gender}}</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>Kelas :</div>
                        <div>{{$database->kelas}}</div>
                    </div>
                </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>