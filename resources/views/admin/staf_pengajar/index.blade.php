@extends('layouts.cms')

@section('content')
    @include('alert')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Staf Pengajar</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('staf_pengajar.create') }}" class="btn btn-sm btn-primary">Tambah Data <i
                                    class="ml-2 fa fa-plus fa-sm"></i></a>

                            {{-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#importExcel">
                            Import Excel <i class="ml-2 fa fa-file"></i>
                        </button>
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <form method="post" action="/staf_pengajar/import_excel" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                            <img src={{ asset("images/ContohImportStaff.png") }} class="rounded mx-auto d-block" alt="Contoh penulisan excel" width="650px">

                                            {{ csrf_field() }}

                                            <label>Pilih file excel</label><span class="text-danger">&nbsp; *csv, xls, xlsx</span>
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}

                            <a href="/staf/delete_all" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus semua data?');">Hapus Semua<i
                                    class="ml-2 fa fa-trash fa-sm"></i></a>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Photo</th>
                                        <th>Nama</th>
                                        <th>NIDN</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Sinta Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($staf_pengajar as $no => $staf_pengajar)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>
                                                @if (!is_null($staf_pengajar->photo))
                                                    <img src="{{ asset($staf_pengajar->photo) }}" width="100">
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $staf_pengajar->nama }}</td>
                                            <td>{{ $staf_pengajar->nidn }}</td>
                                            <td>{{ $staf_pengajar->jabatan }}</td>
                                            <td>{{ $staf_pengajar->email }}</td>
                                            <td><a
                                                    href="http://{{ $staf_pengajar->sintaid }}">{{ $staf_pengajar->sintaid }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('staf_pengajar.edit', $staf_pengajar) }}"
                                                    class="btn btn-sm btn-success"> Edit <i
                                                        class="ml-2 fas fa-edit fa-sm"></i>
                                                </a>
                                                <form class="d-inline" method="POST"
                                                    action="{{ route('staf_pengajar.destroy', $staf_pengajar) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus?');">Hapus <i
                                                            class="fas fa-trash fa-sm ml-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
