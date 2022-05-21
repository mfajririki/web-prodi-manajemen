@extends('layouts.cms')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data</h1>
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

                        <form action="{{ route('admin-lowongankerja.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Lowongan Kerja <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_loker" class="form-control"
                                                value="{{ old('nama_loker') }}" required="">
                                            @error('nama_loker')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Instansi <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_instansi" class="form-control"
                                                value="{{ old('nama_instansi') }}" required="">
                                            @error('nama_instansi')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi <span class="text-danger">*</span></label>
                                            <input type="text" name="lokasi" class="form-control"
                                                value="{{ old('lokasi') }}" required="">
                                            @error('lokasi')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Link <span class="text-danger">*</span></label>
                                            <input type="text" name="link" class="form-control"
                                                value="{{ old('link') }}" required="">
                                            @error('link')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Deadline <span class="text-danger">*</span></label>
                                            <input type="date" name="deadline" class="form-control"
                                                value="{{ old('deadline') }}" required="">
                                            @error('deadline')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="float-right btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-footer -->
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
