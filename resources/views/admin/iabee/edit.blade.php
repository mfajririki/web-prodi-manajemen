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
                            IABEE
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('admin-iabee.update', $iabee->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <!-- Content -->
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="exampleInputFile" class="d-block">Isi Konten <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="konten" class="summernote" required="">{{ $iabee->konten }}</textarea>
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
