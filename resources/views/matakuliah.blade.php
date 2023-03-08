@extends('layouts.template')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Matkul</th>
            <th>Dosen Pengampu</th>
            <th>Semester</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $matakuliah)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $matakuliah->nama }}</td>
                <td>{{ $matakuliah->nama_dosen }}</td>
                <td>{{ $matakuliah->semester }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
