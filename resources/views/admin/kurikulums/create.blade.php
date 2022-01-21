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
                        Kurikulum | Mata Kuliah
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('kurikulums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Mata Kuliah <span class="text-danger">*</span></label>
                                            <input type="text" name="kode_mk" class="form-control" value="{{ old('kode_mk') }}" required="">
                                            @error('kode_mk')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mata Kuliah <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_mk" class="form-control" value="{{ old('nama_mk') }}" required="">
                                            @error('nama_mk')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Semester <span class="text-danger">*</span></label>
                                            <select class="form-control" name="semester">
                                                <option selected="selected">- Pilih Semester -</option>
                                                <option value="Semester 1">Semester 1</option>
                                                <option value="Semester 2">Semester 2</option>
                                                <option value="Semester 3">Semester 3</option>
                                                <option value="Semester 4">Semester 4</option>
                                                <option value="Semester 5">Semester 5</option>
                                                <option value="Semester 6">Semester 6</option>
                                                <option value="Semester 7">Semester 7</option>
                                                <option value="Semester 8">Semester 8</option>
                                              </select>
                                        </div>
                                    </div>
                                    {{-- /.col --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Dokumen Lampiran<span class="text-danger">.docx, .doc, .pdf, .xlsx</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="document" class="custom-file-input" multiple="">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih Dokumen</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelompok Mata Kuliah</label>
                                            <select class="form-control" name="kelompok_mk">
                                                <option value="" selected="selected">- Pilih Kelompok Mata Kuliah -</option>
                                                <option value="MBP">MBP (Mata Kuliah Perilaku Berkarya)</option>
                                                <option value="MKB">MKB (Mata Kuliah Keahlian Berkarya)</option>
                                                <option value="MKK">MKK (Mata Kuliah Keilmuan & Keterampilan)</option>
                                                <option value="MBB">MBB (Mata Kuliah Berkehidupan Bermasyarakat)</option>
                                                <option value="MPK">MPK</option>
                                                <option value="MPB">MPB</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>SKS <span class="text-danger">*</span></label>
                                            <input type="text" name="sks" class="form-control" value="{{ old('sks') }}" required="">
                                            @error('sks')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>                                       
                                    </div>
                                    <!-- /.col -->                                    
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