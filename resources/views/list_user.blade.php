@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Pengguna</h1>
    @include('components.table-user', ['user' => $user])
@endsection
