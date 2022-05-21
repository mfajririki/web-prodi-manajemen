@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">FASILITAS</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/fasilitasBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Fasilitas</p>
        </div>
    </div>

    <div class="container my-4">
        @foreach ($prasarana as $fasilitas)
            <p class="fw-bold">{{ $fasilitas->nama_fasilitas }}</p>
            <div class="row mb-5">
                <div class="col text-center align-self-center">
                    <img src="{{ asset($fasilitas->photo) }}" alt="{{ $fasilitas->nama_fasilitas }}"
                        class="imgFasilitas">
                </div>
                <div class="col align-self-center">
                    <p style="text-align: justify">{!! $fasilitas->deskripsi !!}</p>
                </div>
            </div>
        @endforeach
    </div>

    @include('new_ui.partials.footer')
@endsection
