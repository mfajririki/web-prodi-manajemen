@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">IABEE</p>
            </div>
            <div class="col text-end">
                <img src="{{ asset('assets/images/iabeeBanner.png') }}" alt="www.binadarma.ac.id" style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">IABEE</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">IABEE Evaluation : Penyerahan Laporan Evaluasi Diri</p>
        </div>
    </div>

    <div class="container">
        @foreach ($iabee as $iabee)
            <p style="text-align: justify"> {!! $iabee->konten !!} </p>
        @endforeach
    </div>

    @include('new_ui.partials.footer')
@endsection
