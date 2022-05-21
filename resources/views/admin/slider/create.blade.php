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
                        Slider
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Slider <span class="text-danger">*</span></label>
                                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required="">
                                            @error('nama')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <!-- Photo -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Photo <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo" class="custom-file-input" id="exampleInputFile" required>
                                                    @error('nama')
                                                    <div class="mt-2 text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih Photo</label>
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