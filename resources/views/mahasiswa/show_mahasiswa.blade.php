@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Detail Mahasiswa</h1>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/' . $mahasiswa->foto) }}" width="240">
            </div>
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
            <a href="{{ url('/mhs/cetak_pdf/' . $mahasiswa->id) }}" class="btn btn-primary">Cetak KRS</a>
            <table class="table table-bordered table-striped mt-2 text-center">
                <thead>
                <tr>
                    <th>MataKuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                @if($khs->count() > 0)
                    @foreach($khs as $row)
                        <tr>
                            <td>{{ $row->matakuliah->nama }}</td>
                            <td>{{ $row->matakuliah->sks }}</td>
                            <td>{{ $row->matakuliah->semester }}</td>
                            <td>{{ $row->nilai}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ada</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
