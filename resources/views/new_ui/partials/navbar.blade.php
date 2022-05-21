<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <img src={{ asset('assets/images/ubd_logo.png') }} alt="Universitas Bina Darma" style="width: 200px"
                class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="/tentangprodi">Tentang Prodi Manajemen
                                    </a></li>
                            <li><a class="dropdown-item text-white" href="/visimisitujuan">Visi, Misi & Tujuan</a></li>
                            <li><a class="dropdown-item text-white" href="/stafpengajar">Staf Pengajar</a></li>
                            <li><a class="dropdown-item text-white" href="/profillulusan">Profil Lulusan</a></li>
                            <li><a class="dropdown-item text-white" href="/fasilitas">Prasarana</a></li>
                            <li><a class="dropdown-item text-white" href="/kerjasama">Kerja Sama</a></li>
                            <li><a class="dropdown-item text-white" href="/mbkm">MBKM</a></li>
                            <li><a class="dropdown-item text-white" href="/iabee">IABEE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="/pengumuman">Pengumuman</a></li>
                            <li><a class="dropdown-item text-white" href="/berita">Berita</a></li>
                            <li><a class="dropdown-item text-white" href="/prestasi">Prestasi</a></li>
                            <li><a class="dropdown-item text-white" href="/lowongankerja">Lowongan Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kurikulum
                        </a>
                        <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="/kurikulum">Kurikulum Manajemen</a>
                            </li>
                            <li><a class="dropdown-item text-white" href="/bimbinganakademik">Bimbingan Akademik</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="/panduan">Panduan</a>
                    </li>
                    @guest
                        <button type="button" class="btn btn-primary active btn-sm ms-3"><a href={{ route('login') }}
                                class="loginLink">Login</a></button>
                    @else
                        <button type="button" class="btn btn-primary active btn-sm ms-3"><a href={{ route('login') }}
                                class="loginLink">Admin</a></button>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
