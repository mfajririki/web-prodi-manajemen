<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI UBD | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.css') }}">


    <!-- Announcement Spesific -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/dropzone/min/dropzone.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('adminLTE/img/user8-128x128.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        {{-- <a class="d-block">{{ Auth::user()->name }}</a> --}}
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-header">MAIN MENU</li>

                        <li class="nav-item">
                            <a href="{{ url('/admin') }}"
                                class="nav-link {{ Request::segment(1) == 'admin' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        {{-- Dropdown Beranda --}}
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Beranda
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <div class="container">

                                </div>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('admin-alumnus.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-alumnus' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembimbing_akademik.index') }}"
                                class="nav-link {{ Request::segment(1) == 'pembimbing_akademik' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Bimbingan Akademik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-prasarana.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-prasarana' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>Fasilitas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-lowongankerja.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-lowongankerja' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-exclamation"></i>
                                <p>Lowongan Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-iabee.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-iabee' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>IABEE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-kaprodi.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-kaprodi' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Kaprodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-kerjasama.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-kerjasama' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-share-alt"></i>
                                <p>Kerja Sama</p>
                            </a>
                        </li>
                        {{-- Dropdown Kurikulum --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Kurikulum
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <div class="container">
                                    <li class="nav-item">
                                        <a href="{{ route('kurikulums.index') }}"
                                            class="nav-link {{ Request::segment(1) == 'kurikulums' ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-book"></i>
                                            <p>Distribusi Mata Kuliah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('bidangminat.index') }}"
                                            class="nav-link {{ Request::segment(1) == 'bidangminat' ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-book"></i>
                                            <p>MK Bidang Minat</p>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-panduan.index') }}"
                                class="nav-link {{ Request::segment(1) == 'admin-panduan' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-bullhorn"></i>
                                <p>Panduan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('announcement.index') }}"
                                class="nav-link {{ Request::segment(1) == 'announcement' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-bullhorn"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile_lulusan.index') }}"
                                class="nav-link {{ Request::segment(1) == 'profile_lulusan' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Profil Lulusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('staf_pengajar.index') }}"
                                class="nav-link {{ Request::segment(1) == 'staf_pengajar' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Staf Pengajar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tentang.index') }}"
                                class="nav-link {{ Request::segment(1) == 'tentang' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Tentang Prodi MANAJEMEN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tujuans.index') }}"
                                class="nav-link {{ Request::segment(1) == 'tujuans' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>Tujuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visi_misi.index') }}"
                                class="nav-link {{ Request::segment(1) == 'visi_misi' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('slider.index') }}"
                                class="nav-link {{ Request::segment(1) == 'slider' ? 'active' : '' }}">
                                <i class="nav-icon fas  fa-clone"></i>
                                <p>Slider</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}"
                                class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}">
                                <i class="nav-icon fas  fa-user-plus"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Beranda Depan</p>
                            </a>
                        </li>

                        <!-- Account -->
                        <li class="nav-header">ACCOUNT</li>

                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profil</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Log out</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none"> @csrf </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2021</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Manajemen UBD</b>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLTE/js/adminlte.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('adminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- dropzonejs -->
    <script src="{{ asset('adminLTE/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>

    {{-- tree --}}
    <script>
        $('ul').on('expanded.lte.treeview', handleExpandedEvent)
    </script>
    <script>
        $('ul').Treeview()
    </script>

    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote({
                height: 150,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['table', 'picture', 'video', 'link']]
                ]
            });
        })
    </script>

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
