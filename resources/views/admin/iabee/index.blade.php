@extends('layouts.cms')

@section('content')
    @include('alert')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">IABEE</h1>
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
                            <a href="{{ route('admin-iabee.create') }}" class="btn btn-sm btn-primary">Tambah Data <i
                                    class="ml-2 fa fa-plus fa-sm"></i></a>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Konten</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($iabee as $no => $iabee)
                                        <tr>
                                            <td>{!! $iabee->konten !!}</td>
                                            <td>
                                                <a href="{{ route('admin-iabee.edit', $iabee) }}"
                                                    class="btn btn-sm btn-success"> Edit <i
                                                        class="ml-2 fas fa-edit fa-sm"></i>
                                                </a>
                                                <form class="d-inline" method="POST"
                                                    action="{{ route('admin-iabee.destroy', $iabee) }}">
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
