@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ $url_form }}">
                @csrf
                {!! isset($mhs) ? method_field('PUT') : '' !!}
                <div class="form-group">
                    <label for="inputNim">Nim</label>
                    <input type="text" id="inputNim" class="form-control" name="nim" value="{{ isset($mhs) ? $mhs->nim : old('nim') }}">
                    @error('nim')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" id="inputNama" class="form-control" name="nama" value="{{ isset($mhs) ? $mhs->nama : old('nama') }}">
                    @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputKelas">Kelas</label>
                    <select class="form-control" id="inputKelas" name="kelas_id">
                        @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}" @isset($mhs) @selected($mhs->kelas->id == $kls->id) @endisset>{{ $kls->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputJK">Jenis Kelamin</label>
                    <select type="text" id="inputJK" class="form-control" name="jk">
                        <option value="L" @isset($mhs) @selected($mhs->jk == 'L') @endisset>Laki-laki</option>
                        <option value="P" @isset($mhs) @selected($mhs->jk == 'P') @endisset>Perempuan</option>
                    </select>
                    @error('jk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTempatLahir">Tempat Lahir</label>
                    <input type="text" id="inputTempatLahir" class="form-control" name="tempat_lahir" value="{{ isset($mhs) ? $mhs->tempat_lahir : old('tempat_lahir') }}">
                    @error('tempat_lahir')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTanggalLahir">Tanggal Lahir</label>
                    <input type="date" id="inputTanggalLahir" class="form-control" name="tanggal_lahir" value="{{ isset($mhs) ? $mhs->tanggal_lahir : old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputHp">No. Hp</label>
                    <input type="text" id="inputHp" class="form-control" name="hp" value="{{ isset($mhs) ? $mhs->hp : old('hp') }}">
                    @error('hp')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" id="inputAlamat" class="form-control" name="alamat" value="{{ isset($mhs) ? $mhs->nim : old('nim') }}">
                    @error('alamat')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
