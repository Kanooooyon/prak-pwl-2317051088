@extends('layouts.app')

@section('content')

<h1>Daftar Pengguna </h1>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>KELAS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->nim }}</td>
            <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
