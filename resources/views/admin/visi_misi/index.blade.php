@extends('layouts.cms')

@section('content')
@include('alert')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Visi dan Misi</h1>
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
                        <a href="{{ route('visi_misi.create') }}" class="btn btn-sm btn-primary">Tambah Data <i
                                class="ml-2 fa fa-plus fa-sm"></i></a>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($visi_misi as $visi_misi)
                                <tr>
                                    <td>{!! $visi_misi->visi !!}</td>
                                    <td>{!! $visi_misi->misi !!}</td>
                                    <td>
                                        <a href="{{ route('visi_misi.edit', $visi_misi) }}"
                                            class="btn btn-sm btn-success"> Edit <i class="ml-2 fas fa-edit fa-sm"></i>
                                        </a>
                                        <form class="d-inline" method="POST"
                                            action="{{ route('visi_misi.destroy', $visi_misi) }}">
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
