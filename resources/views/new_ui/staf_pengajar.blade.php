@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">STAF PENGAJAR</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/stafpengajarBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Staf Pengajar</li>
            </ol>
        </nav>
    </div>

    <div class="container fw-bold">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Staf</p>
        </div>
        @foreach ($staf_pengajar as $staf)
            <div class="row py-3 mb-3 border-bottom">
                <div class="col text-end">
                    <img src="{{ asset($staf->photo) }}" alt="" class="imgStaf">
                </div>
                <div class="col-2">
                    <p>Nama</p>
                    <p>NIDN</p>
                    <p>Jabatan</p>
                    <p>Email</p>
                    <a href="https://{{ $staf->sintaid }}" style="text-decoration: none">Sinta</a>
                </div>
                <div class="col">
                    <p>: {{ $staf->nama }}</p>
                    <p>: {{ $staf->nidn }}</p>
                    <p>: {{ $staf->jabatan }}</p>
                    <p>: {{ $staf->email }}</p>
                    <p></p>
                </div>
                <div class="col"></div>
            </div>
        @endforeach
        <div class="justify-content-center">{{ $staf_pengajar->links() }}</div>
    </div>

    @include('new_ui.partials.footer')
@endsection
