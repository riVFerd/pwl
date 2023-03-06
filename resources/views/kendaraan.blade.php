@extends('layouts.template')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>NO</th>
            <th>NoPol</th>
            <th>Merk</th>
            <th>Jenis</th>
            <th>Tahun Buat</th>
            <th>Warna</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $no => $kendaraan)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{!! $kendaraan->nopol  !!}</td>
                <td>{{ $kendaraan->merk }}</td>
                <td>{{ $kendaraan->jenis }}</td>
                <td>{{ $kendaraan->tahun_buat }}</td>
                <td>{{ $kendaraan->warna }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
