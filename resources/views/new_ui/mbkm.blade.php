@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">MERDEKA BELAJAR KAMPUS MERDEKA (MBKM)</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/mbkmBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">MBKM</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">MBKM</p>
        </div>
    </div>

    <div class="bgGrey my-3 py-3">
        <div class="container">
            <p class="subJudulMBKM">Berita MBKM Terkini</p>
            @foreach ($announcements as $announcement)
                @if ($announcement->category == 'MBKM')
                    <div class="row rounded bg-white p-3 boxShadow">
                        <div class="col">
                            <img src="{{ asset($announcement->photo) }}" alt="" class="imgMBKM rounded">
                        </div>
                        <div class="col">
                            <p class="fw-bold">{{ $announcement->created_at->translatedFormat('l, d m Y') }}</p>
                            <p style="font-size: 22px">{{ $announcement->title }}</p>
                            <p>{!! $announcement->content !!}</p>
                            <a class="btn btn-primary btn-sm rounded-pill active" href="#" role="button">Selengkapnya</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="justify-content-center">{{ $announcements->links() }}</div>
    </div>

    <div class="container">
        <p class="subJudulMBKM">Program MBKM Bina Darma</p>
        <div class="row mb-5">
            <div class="col">
                <div class="card text-center boxShadow my-3" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm1.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm4.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm7.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
            </div>
            <div class="col">
                <div class="card text-center boxShadow my-3" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm2.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm5.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm8.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
            </div>
            <div class="col">
                <div class="card text-center boxShadow my-3" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm3.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm6.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
                <div class="card text-center boxShadow my-3 pt-2" style="width: 18rem">
                    <img src={{ asset('assets/images/mbkm9.png') }} alt="" class="imgProgramMBKM">
                    <p>Program Pertukaran Mahasiswa</p>
                </div>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
