@extends('layouts.cms')

@section('content')
    @include('alert')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data</h1>
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

                    <div class="card card-primary">
                        <div class="card-header">
                            Lowongan Kerja
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('admin-lowongankerja.update', $admin_lowongankerja->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Lowongan Kerja <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_loker" class="form-control"
                                                value="{{ $admin_lowongankerja->nama_loker }}" required="">
                                            <input type="hidden" name="old_nama_loker"
                                                value="{{ $admin_lowongankerja->nama_loker }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Instansi <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_instansi" class="form-control"
                                                value="{{ $admin_lowongankerja->nama_instansi }}" required="">
                                            <input type="hidden" name="old_nama_instansi"
                                                value="{{ $admin_lowongankerja->nama_instansi }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi <span class="text-danger">*</span></label>
                                            <input type="text" name="lokasi" class="form-control"
                                                value="{{ $admin_lowongankerja->lokasi }}" required="">
                                            <input type="hidden" name="old_lokasi"
                                                value="{{ $admin_lowongankerja->lokasi }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Link <span class="text-danger">*</span></label>
                                            <input type="text" name="link" class="form-control"
                                                value="{{ $admin_lowongankerja->link }}" required="">
                                            <input type="hidden" name="old_link" value="{{ $admin_lowongankerja->link }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deadline <span class="text-danger">*</span></label>
                                            <input type="date" name="deadline" class="form-control"
                                                value="{{ $admin_lowongankerja->deadline }}" required="">
                                            <input type="hidden" name="old_deadline"
                                                value="{{ $admin_lowongankerja->deadline }}">
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="float-right btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- /form -->

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
