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
            <a href="{{ url('/mahasiswa/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>NIM</th>
                       <th>Nama</th>
                       <th>Prodi</th>
                       <th>Jenis Kelamin</th>
                       <th>No. Hp</th>
                       <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($mhs->count() > 0)
                        @foreach($mhs as $i => $m)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $m->nim }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->prodi->prodi }}</td>
                                <td>{{ $m->jk }}</td>
                                <td>{{ $m->hp }}</td>
                                <td class="">
                                    <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form class="d-inline" method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
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
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
