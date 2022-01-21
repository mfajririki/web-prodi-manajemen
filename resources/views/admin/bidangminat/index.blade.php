@extends('layouts.cms')

@section('content')
@include('alert')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mata Kuliah Bidang Minat</h1>
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

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('bidangminat.create') }}" class="btn btn-sm btn-primary">Tambah Data <i
                                class="ml-2 fa fa-plus fa-sm"></i></a>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Kelompok Bidang Minat</th>
                                    <th>Kelompok Mata Kuliah</th>
                                    <th>Semester</th>
                                    <th>SKS</th>
                                    <th>Stream</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($mk_bidangminat as $no => $mk_bidangminat)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $mk_bidangminat->kode_mk }}</td>
                                    <td>{{ $mk_bidangminat->nama_mk }}</td>
                                    <td>{{ $mk_bidangminat->bidangminat }}</td>
                                    <td>{{ $mk_bidangminat->kelompok_mk }}</td>
                                    <td>{{ $mk_bidangminat->semester }}</td>
                                    <td>{{ $mk_bidangminat->sks }}</td>
                                    <td>{{ $mk_bidangminat->stream }}</td>
                                    <td>
                                        <a href="{{ route('bidangminat.edit', $mk_bidangminat) }}"
                                            class="btn btn-sm btn-success"> Edit <i class="ml-2 fas fa-edit fa-sm"></i>
                                        </a>
                                        <form class="d-inline" method="POST"
                                            action="{{ route('bidangminat.destroy', $mk_bidangminat) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus?');">Hapus <i
                                                    class="fas fa-trash fa-sm ml-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.card-body -->
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
