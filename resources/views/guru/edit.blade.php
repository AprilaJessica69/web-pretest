@extends('tampilan')

@section('konten')

<h4>Edit Siswa</h4>

<form action="{{ route('guru.update', $guru->id) }}" method="post">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" value="{{ $guru->nis }}" class="form-control mb-2">

    <label>Nama</label>
    <input type="text" name="nama" value="{{ $guru->nama }}" class="form-control mb-2">

    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $guru->alamat }}" class="form-control mb-2">

    <label>No Hp</label>
    <input type="text" name="no_hp" value="{{ $guru->no_hp }}" class="form-control mb-2">

    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $guru->jenis_kelamin }}" class="form-control mb-2">

    <label>Hobi</label>
    <input type="text" name="hobi" value="{{ $guru->hobi }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection