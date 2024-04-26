<!DOCTYPE html>
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
<style>
    body{
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(113,197,236,1) 0%, rgba(153,230,171,1) 53%, rgba(0,176,255,1) 73%);
    }
</style>
<body>
    

    <div class="grid-center">
        <div class="card bg-primary">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1 class="text-light"> Data Siswa </h1>
                <a href="{{ url('data-siswa/create') }}" class="btn btn-light">+ Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table rounded-3 overflow-hidden text-center align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($database as $data)
                            <tr>
                                <th>{{$loop -> iteration}}</th>
                                <th>{{$data -> nis}}</th>
                                <th>{{$data -> nama}}</th>
                                <th>{{$data -> gender}}</th>
                                <th>{{$data -> kelas}}</th>
                                <th>
                                    <a href="{{ route('data-siswa.show',$data->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                    <form action="{{route('data-siswa.destroy',$data->id)}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </th>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>