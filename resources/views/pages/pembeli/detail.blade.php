@extends('layouts.main')

@section('container')
    <h1>{{ $pembeli->namaPembeli}}</h1>
    <h1>{{ $pembeli->alamatPembeli}}</h1>
    <h1>{{ $pembeli->banyakDibeli}}</h1>
    <h1>{{ $pembeli->tanggalmembeli}}</h1>
    <a class="button" href="/pembeli/all">back</a>
@endsection