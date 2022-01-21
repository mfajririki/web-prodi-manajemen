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
                        Visi dan Misi
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('visi_misi.update', $visi_misi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="d-block">Visi</label>
                                        <textarea name="visi" class="summernote">{{ $visi_misi->visi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="d-block">Misi</label>
                                        <textarea name="misi" class="summernote">{{ $visi_misi->misi }}</textarea>
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
