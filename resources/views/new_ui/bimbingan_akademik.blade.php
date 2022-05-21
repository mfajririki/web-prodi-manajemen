@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col text-end">
                <img src={{ asset('assets/images/kurikulumBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
            <div class="col align-self-center text-center">
                <p class="judul">BIMBINGAN AKADEMIK</p>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Kurikulum</p>
                <li class="breadcrumb-item active" aria-current="page">Bimbingan Akademik</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Bimbingan Akademik</p>
        </div>
    </div>

    <div class="container">
        @foreach ($bimbinganakademik as $ba)
            <div class="row boxShadow p-3 my-3">
                <div class="col align-self-center">
                    <p class="fw-bold py-3">{{ $ba->title }}</p>
                </div>
                <div class="col text-end align-self-center">
                    <a target="_blank" href="{{ asset($ba->document) }}" type="button"
                        class="btn btn-primary btn-sm active rounded-pill">Download</a>
                </div>
            </div>
        @endforeach
    </div>

    @include('new_ui.partials.footer')
@endsection
