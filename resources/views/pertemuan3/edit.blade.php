!
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

<body>
    <div class="grid-center">
        <div class="card bg-primary text-light">
            <div class="card-header">
                <h1 class="text-center">Ubah Detail Siswa</h1>
            </div>
            <form action="{{route('data-siswa.update',$database->id)}}" method="post">
                @csrf
                @method("patch")
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" value ="{{$database->nis}}" id="nis" name="nis" placeholder="NIS" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" value ="{{$database -> nama}}" id="nama" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="" disabled selected>-- pilih jenis kelamin --</option>
                            <option value="Laki-laki" @if($database->gender == "Laki-laki")selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if($database->gender == "Perempuan")selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kelas">Kelas</label>
                        <input type="number" class="form-control" value="{{$database->kelas}}" id="kelas" name="kelas" placeholder="Kelas">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('data-siswa.show',$database->id) }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
        </div>
    </div>
    </form>


    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>