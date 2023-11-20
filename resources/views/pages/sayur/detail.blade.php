@extends('layouts.main')

@section('container')
    <h1>{{ $sayurs->namaSayur}}</h1>
    <h1>{{ $sayurs->warnaSayur}}</h1>
    <h1>{{ $sayurs->kualitasSayur}}</h1>
    <h1>{{ $sayurs->hargaSayur}}</h1>
    <h1>{{ $sayurs->tanggalExpired}}</h1>

    <a class="button" href="/sayur/all">back</a>
@endsection