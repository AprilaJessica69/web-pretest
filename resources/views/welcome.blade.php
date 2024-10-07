<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center">Selamat datang di data sekolah</h1>

    <div class="text-center">
        <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Kelola Siswa</a>
    </div>
    <div class="text-center">
        <a href="{{ route('guru.tampil') }}" class="btn btn-primary">Kelola Guru</a>
    </div>
</body>
</html>