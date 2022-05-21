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
                            Pengumuman
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
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

                                    <!-- Photo -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih
                                                        Foto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori <span class="text-danger">*</span></label>
                                            <select class="form-control" name="category">
                                                <option selected="selected">- Pilih Kategori -</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Berita">Berita</option>
                                                <option value="Prestasi">Prestasi</option>
                                                <option value="MBKM">MBKM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Content -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile" class="d-block">Isi Konten</label>
                                            <textarea name="content" class="summernote"></textarea>
                                        </div>
                                    </div>

                                    <!-- Documents -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Dokumen Lampiran</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" class="custom-file-input" multiple="">
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
