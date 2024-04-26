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
        <form action="{{route('data-siswa.store')}}" method="post" class="card bg-primary">
            @csrf
            <div class="card-header">
                <h1 class="text-light"> Tambah Data Siswa </h1>
            </div>
            <div class="card-body">
                <div class="text-light">
                    <div class="form-group mb-3">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="" disabled selected>-- pilih jenis kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kelas">Kelas</label>
                        <input type="number" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('data-siswa') }}" type="button" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>