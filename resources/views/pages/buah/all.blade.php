@extends('layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">namaBuah</th>
        <th scope="col">jenisBuah</th>
        <th scope="col">ukuran</th>
        <th scope="col">Expired</th>
        <th scope="col">Acttion</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($buahs as $key => $buah)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $buah->namaBuah}}</td>
          <td>{{ $buah->jenisBuah}}</td>
          <td>{{ $buah->ukuran }}</td>
          <td>{{ $buah->Expired }}</td>
          <th><a type="button" class="button1" href="/buah/detail/{{ $buah->id }}">detail</a></th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection