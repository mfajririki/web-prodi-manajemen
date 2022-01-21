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
                        Profile Lulusan
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('profile_lulusan.update', $profile_lulusan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No. <span class="text-danger">*</span></label>
                                        <input type="text" name="no" class="form-control"
                                            value="{{ $profile_lulusan->no }}" required="">
                                        <input type="hidden" name="old_no" value="{{ $profile_lulusan->no }}">
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $profile_lulusan->nama }}" required="">
                                        <input type="hidden" name="old_nama" value="{{ $profile_lulusan->nama }}">
                                    </div>
                                </div>
                            </div>
                            {{-- /row --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="d-block">Deskripsi</label>
                                        <textarea name="deskripsi" class="summernote">{{ $profile_lulusan->deskripsi }}</textarea>
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
