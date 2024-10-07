@extends('tampilan')

@section('konten')
<div class="d-flex">
    <h4>List Guru</h4>
</div>

<div class="ms-auto">
        <a class="btn btn-success" href="{{ route('guru.tambah') }}">Tambah Guru</a>
    </div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach($guru as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }}</td>
        <td>
            <a href="{{ route('guru.edit', $data->id) }}" class="btn btn-sn btn-warning">Edit</a>
            <form action="{{ route('guru.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>   
    @endforeach
</table>

