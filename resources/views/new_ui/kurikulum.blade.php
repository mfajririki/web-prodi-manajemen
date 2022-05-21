@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col text-end">
                <img src={{ asset('assets/images/kurikulumBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
            <div class="col align-self-center text-center">
                <p class="judul">KURIKULUM PRODI MANAJEMEN</p>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Kurikulum</p>
                <li class="breadcrumb-item active" aria-current="page">Kurikulum Manajemen</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-distribusimk-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-distribusimk" type="button" role="tab" aria-controls="nav-distribusimk"
                    aria-selected="true">Distribusi Mata Kuliah</button>
                <button class="nav-link" id="nav-bidangminat-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bidangminat" type="button" role="tab" aria-controls="nav-bidangminat"
                    aria-selected="false">Mata Kuliah Bidang
                    Minat</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-distribusimk" role="tabpanel"
                aria-labelledby="nav-distribusimk-tab">
                @include('new_ui.partials.distribusi_mata_kuliah')
            </div>
            <div class="tab-pane fade" id="nav-bidangminat" role="tabpanel" aria-labelledby="nav-bidangminat-tab">
                @include('new_ui.partials.mata_kuliah_bidang_minat')
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
