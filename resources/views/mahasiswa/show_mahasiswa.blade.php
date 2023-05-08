@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Detail Mahasiswa</h1>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{ $mahasiswa->nim }}</li>
                <li class="list-group-item"><b>Nama : </b>{{ $mahasiswa->nama }}</li>
                <li class="list-group-item"><b>Kelas : </b>{{ $mahasiswa->kelas->nama_kelas }}</li>
                <li class="list-group-item"><b>Jenis Kelamin : </b>{{ $mahasiswa->jk }}</li>
                <li class="list-group-item"><b>Tempat Lahir : </b>{{ $mahasiswa->tempat_lahir }}</li>
                <li class="list-group-item"><b>Tanggal Lahir : </b>{{ $mahasiswa->tanggal_lahir }}</li>
                <li class="list-group-item"><b>Alamat : </b>{{ $mahasiswa->alamat }}</li>
                <li class="list-group-item"><b>No. Hp : </b>{{ $mahasiswa->hp }}</li>
            </ul>
        </div>
    </div>
@endsection
