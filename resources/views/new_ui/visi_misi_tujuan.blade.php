@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">VISI, MISI & TUJUAN</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/visimisitujuanBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Visi, Misi & Tujuan</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row border-bottom pb-2 mb-2">
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/visi.png') }} alt="Visi" style="width: 170px">
            </div>
            <div class="col align-self-center">
                @foreach ($visi_misi as $visi)
                    <p style="text-align: justify"> {!! $visi->visi !!} </p>
                @endforeach
            </div>
        </div>
        <div class="row border-bottom pb-2 mb-2">
            <div class="col align-self-center">
                @foreach ($visi_misi as $misi)
                    <p style="text-align: justify"> {!! $misi->misi !!} </p>
                @endforeach
            </div>
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/misi.png') }} alt="Misi" style="width: 170px">
            </div>
        </div>
        <div class="row pb-2 mb-5">
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/tujuan.png') }} alt="Tujuan" style="width: 170px">
            </div>
            <div class="col align-self-center">
                @foreach ($tujuan as $tujuan)
                    <p style="text-align: justify"> {!! $tujuan->konten_tujuan !!} </p>
                @endforeach
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
