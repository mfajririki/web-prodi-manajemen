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
                        User
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required="">
                                            @error('name')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required="">
                                        @error('email')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">* min 8 karakter</span></label>
                                        <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required="">
                                        @error('password')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
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