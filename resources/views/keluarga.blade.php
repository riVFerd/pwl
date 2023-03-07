@extends('layouts.template')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Relasi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $keluarga)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $keluarga->nama }}</td>
                <td>{{ $keluarga->jenis_kelamin }}</td>
                <td>{{ $keluarga->relasi }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
