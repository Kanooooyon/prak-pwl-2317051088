@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Data User</h2>
    <form action="{{ url('user/update/'.$user->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $user->nama }}">
        </div>
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $user->nim }}">
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas_id" class="form-select">
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ url('/user') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
