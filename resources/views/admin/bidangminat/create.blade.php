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
                        Mata Kuliah Bidang Minat
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('bidangminat.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <label>Bidang Minat <span class="text-danger">*</span></label>
                                            <select class="form-control" name="bidangminat">
                                                <option value="" selected="selected">- Pilih Bidang Minat -</option>
                                                <option value="IT GOVERNANCE">IT GOVERNANCE</option>
                                                <option value="DATA SCIENCE">DATA SCIENCE</option>
                                                <option value="ENTERPRISE SYSTEM">ENTERPRISE SYSTEM</option>
                                                <option value="APPLICATION DEVELOPMENT">APPLICATION DEVELOPMENT</option>
                                                <option value="MULTIMEDIA">MULTIMEDIA</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelompok Mata Kuliah <span class="text-danger">*</span></label>
                                            <select class="form-control" name="kelompok_mk">
                                                <option value="" selected="selected">- Pilih Kelompok Mata Kuliah -</option>
                                                <option value="MBP">MBP (Mata Kuliah Perilaku Berkarya)</option>
                                                <option value="MKB">MKB (Mata Kuliah Keahlian Berkarya)</option>
                                                <option value="MKK">MKK (Mata Kuliah Keilmuan & Keterampilan)</option>
                                                <option value="MBB">MBB (Mata Kuliah Berkehidupan Bermasyarakat)</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                        <div class="form-group">
                                            <label>SKS <span class="text-danger">*</span></label>
                                            <input type="text" name="sks" class="form-control" value="{{ old('sks') }}" required="">
                                            @error('sks')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Stream <span class="text-danger">*</span></label>
                                            <select class="form-control" name="stream">
                                                <option selected="selected">- Pilih Stream -</option>
                                                <option value="Stream 1">Stream 1</option>
                                                <option value="Stream 2">Stream 2</option>
                                                <option value="Stream 3">Stream 3</option>
                                                <option value="Stream 4">Stream 4</option>
                                            </select>
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