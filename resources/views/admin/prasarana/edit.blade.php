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
                            Fasilitas
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('admin-prasarana.update', $admin_prasarana->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Fasilitas</label>
                                            <input type="text" name="nama_fasilitas" class="form-control"
                                                value="{{ $admin_prasarana->nama_fasilitas }}" required="">
                                            <input type="hidden" name="old_nama_fasilitas"
                                                value="{{ $admin_prasarana->nama_fasilitas }}">
                                        </div>
                                    </div>
                                    <!-- Photo -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <input type="hidden" name="old" value="{{ $admin_prasarana->photo }}">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih
                                                        Foto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="exampleInputFile" class="d-block">Deskripsi</label>
                                            <textarea name="deskripsi" class="summernote">{{ $admin_prasarana->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <span class="small text-danger">form bertanda * wajib diisi</span>
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
