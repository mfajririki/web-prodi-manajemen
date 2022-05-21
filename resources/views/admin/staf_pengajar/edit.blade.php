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
                            Staf Pengajar
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('staf_pengajar.update', $staf_pengajar->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Photo -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <input type="hidden" name="old" value="{{ $staf_pengajar->photo }}">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih
                                                        Foto</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama <span class="text-danger">*</span></label>
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $staf_pengajar->nama }}" required="">
                                            <input type="hidden" name="old_nama" value="{{ $staf_pengajar->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label>NIDN <span class="text-danger">*</span></label>
                                            <input type="text" name="nidn" class="form-control"
                                                value="{{ $staf_pengajar->nidn }}" required="">
                                            <input type="hidden" name="old_nidn" value="{{ $staf_pengajar->nidn }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jabatan <span class="text-danger">*</span></label>
                                            <input type="text" name="jabatan" class="form-control"
                                                value="{{ $staf_pengajar->jabatan }}" required="">
                                            <input type="hidden" name="old_jabatan" value="{{ $staf_pengajar->jabatan }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" class="form-control"
                                                value="{{ $staf_pengajar->email }}" required="">
                                            <input type="hidden" name="old_email" value="{{ $staf_pengajar->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Sinta Link</label>
                                            <input type="text" name="sintaid" class="form-control"
                                                value="{{ $staf_pengajar->sintaid }}" required="">
                                            <input type="hidden" name="old_sintaid"
                                                value="{{ $staf_pengajar->sintaid }}">
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
