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
                            Panduan
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('admin-panduan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title') }}" required="">
                                            @error('title')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.col -->

                                    <!-- Documents -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Dokumen Lampiran<span
                                                    class="text-danger">.docx, .doc, .pdf, .xlsx</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="document" class="custom-file-input" multiple=""
                                                        required>
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih
                                                        Dokumen</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
