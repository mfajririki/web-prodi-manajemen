@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">LOWONGAN KERJA</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/lowongankerjaBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Informasi</p>
                <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Lowongan Kerja</p>
        </div>
    </div>

    <div class="container">
        <ol>
            @foreach ($lowongan_kerja as $loker)
                <li><a href="https://{{ $loker->link }}" class="linkLoker" target="_blank">{{ $loker->nama_loker }}
                        "{{ $loker->nama_instansi }}"</a> ({{ $loker->lokasi }}) | <span
                        style="color: rgb(255, 5, 5)">Deadline : {{ $loker->deadline }}</span>
                </li>
            @endforeach
        </ol>
    </div>

    @include('new_ui.partials.footer')
@endsection
