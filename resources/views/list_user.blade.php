@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar User</h2>
    <a href="{{ url('user/create') }}" class="btn btn-primary mb-3">Tambah User</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $index => $u)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->nim }}</td>
                <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
                <td>
                    <a href="{{ url('user/edit/'.$u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('user/delete/'.$u->id) }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
