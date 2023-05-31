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
            <button class="btn btn-sm btn-success my-2" onclick="tambahData()">Tambah Data</button>
            <table class="table table-bordered table-striped" id="data-mahasiswa">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    {{--                    <th>Foto</th>--}}
                    {{--                    <th>Kelas</th>--}}
                    {{--                    <th>Jenis Kelamin</th>--}}
                    <th>No. Hp</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {{--                @if ($mhs->count() > 0)--}}
                {{--                    @foreach($mhs as $i => $m)--}}
                {{--                        <tr>--}}
                {{--                            <td>{{ ++$i }}</td>--}}
                {{--                            <td>{{ $m->nim }}</td>--}}
                {{--                            <td>{{ $m->nama }}</td>--}}
                {{--                            <td>--}}
                {{--                                <img src="{{ asset('storage/' . $m->foto) }}" alt="{{ $m->nama }}" width="50">--}}
                {{--                            </td>--}}
                {{--                            <td>{{ $m->kelas->nama_kelas }}</td>--}}
                {{--                            <td>{{ $m->jk }}</td>--}}
                {{--                            <td>{{ $m->hp }}</td>--}}
                {{--                            <td class="">--}}
                {{--                                <a href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-info">--}}
                {{--                                    Show--}}
                {{--                                </a>--}}
                {{--                                <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="btn btn-sm btn-warning">--}}
                {{--                                    Edit--}}
                {{--                                </a>--}}
                {{--                                <form class="d-inline" method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">--}}
                {{--                                    @csrf--}}
                {{--                                    @method('DELETE')--}}
                {{--                                    <button type="submit" href="{{ url('/mahasiswa/' . $m->id) }}"--}}
                {{--                                            class="btn btn-sm btn-danger">--}}
                {{--                                        Delete--}}
                {{--                                    </button>--}}
                {{--                                </form>--}}
                {{--                            </td>--}}
                {{--                        </tr>--}}
                {{--                    @endforeach--}}
                {{--                @else--}}
                {{--                    <tr>--}}
                {{--                        <td colspan="6" class="text-center">Data tidak ada</td>--}}
                {{--                    </tr>--}}
                {{--                @endif--}}
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

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">No. HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function tambahData() {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Tambah Data Mahasiswa');
            $('#modal_mahasiswa #nim').val('');
            $('#modal_mahasiswa #nama').val('');
            $('#modal_mahasiswa #hp').val('');
        }

        function updateData(th){
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        $(document).ready(function () {
            let dataMahasiswa = $('#data-mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{  url('/mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [
                    {data: 'nomor', sercable:false, orderable:false },
                    {data: 'nim', name: 'nim', orderable: false },
                    {data: 'nama', name: 'nama' },
                    {data: 'hp', name: 'hp', orderable: false },
                    {data: 'id',
                        render: function (id, type, row, meta) {
                            return '<a href="{{ url('/mahasiswa') }}/' + id + '/edit" class="btn btn-sm btn-info mr-2"><i class="fa fa-eye mr-1"></i>Show</a>' +
                                `<button data-url="{{ url('/mahasiswa')}}/`+id+`" class="btn btn-sm mr-2 btn-warning" onclick="updateData(this)" data-id="`+row.id+`" data-nim="`+row.nim+`" data-nama="`+row.nama+`" data-hp="`+row.hp+`"><i class="fa fa-edit"></i> Edit</button>` +
                                '<button type="submit" onclick="return confirm(\'yakin kah bang?\')" href="{{ url('/mahasiswa') }}/' + id + '" class="btn btn-sm btn-danger">Delete</button>';
                        }, orderable: false
                    },
                ]
            });

            $('#form_mahasiswa').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success:function(data){
                        $('.form-message').html('');
                        if(data.status){
                            $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        }else{
                            $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                            alert('error');
                        }

                        if(data.modal_close){
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }

                    }
                });
            });
        });
    </script>
@endpush
