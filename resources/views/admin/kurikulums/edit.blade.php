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
                        Kurikulum | Mata Kuliah
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('kurikulums.update', $kurikulum->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kode Mata Kuliah <span class="text-danger">*</span></label>
                                        <input type="text" name="kode_mk" class="form-control"
                                            value="{{ $kurikulum->kode_mk }}" required="">
                                        <input type="hidden" name="old_kode_mk" value="{{ $kurikulum->kode_mk }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Mata Kuliah <span class="text-danger">*</span></label>
                                        <input type="text" name="nama_mk" class="form-control"
                                            value="{{ $kurikulum->nama_mk }}" required="">
                                        <input type="hidden" name="old_nama_mk" value="{{ $kurikulum->nama_mk }}">
                                    </div>
                                </div>
                                {{-- /.col --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kelompok Mata Kuliah <span class="text-danger">*</span></label>
                                        <select class="form-control" name="kelompok_mk">
                                            <option selected="selected" value="
                                            {{ $kurikulum->kelompok_mk}}">{{ $kurikulum->kelompok_mk }}</option>
                                            <option value="MBP">MBP (Mata Kuliah Perilaku Berkarya)</option>
                                            <option value="MKB">MKB (Mata Kuliah Keahlian Berkarya)</option>
                                            <option value="MKK">MKK (Mata Kuliah Keilmuan & Keterampilan)</option>
                                            <option value="MBB">MBB (Mata Kuliah Berkehidupan Bermasyarakat</option>
                                            <option value="MPK">MPK</option>
                                            <option value="MPB">MPB</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label>SKS <span class="text-danger">*</span></label>
                                        <input type="text" name="sks" class="form-control"
                                            value="{{ $kurikulum->sks }}" required="">
                                        <input type="hidden" name="old_sks" value="{{ $kurikulum->sks }}">
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Semester <span class="text-danger">*</span></label>
                                        <select class="form-control" name="semester">
                                            <option selected="selected" value="{{ $kurikulum->semester}}">{{ $kurikulum->semester }}</option>
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
                                <!-- /.col -->
                                <!-- Documents -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="mt-3">Dokumen Lampiran</label>
                                        <table class="table table-striped table-dark">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($kurikulum->document==null ) 
                                                <tr>
                                                    <td colspan="2" class="text-center">Belum ada dokumen lampiran</td>
                                                </tr>
                                                @else                                                    
                                                <tr>
                                                    <td>
                                                        {{ $kurikulum->document }}
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info"
                                                            href="{{ asset($kurikulum->document) }}"
                                                            target="_blank">Buka <i
                                                            class="fas fa-eye fa-sm ml-2"></i></a>   
                                                        <a class="btn btn-sm btn-danger"
                                                            href="{{ route('kurikulums.hapus_doc', $kurikulum) }}"
                                                            onclick="return confirm('Yakin ingin menghapus?');">Hapus
                                                            <i class="fas fa-trash fa-sm ml-2"></i></a>                                                     
                                                    </td>
                                                </tr>                                                    
                                                @endif
                                            </tbody>
                                        </table>
                                        @if ($kurikulum->document == null)
                                        <label for="exampleInputFile" class="mt-3">Tambah Dokumen<span class="text-danger"> .docx, .doc, .pdf, .xlsx</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="document" class="custom-file-input" multiple="">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih
                                                    Dokumen</label>
                                            </div>
                                        </div>
                                        @endif                                        
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
