@extends('layouts.main')

@section('container')
    <h1>{{ $buah->namaBuah}}</h1>
    <h1>{{ $buah->jenisBuah}}</h1>
    <h1>{{ $buah->ukuran}}</h1>
    <h1>{{ $buah->Expired}}</h1>

    <a class="button" href="/buah/all">back</a>
@endsection