@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    @include('new_ui.partials.header')

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Sambutan Kaprodi</p>
        </div>
        @foreach ($profile_kaprodi as $kaprodi)
            <div class="row mt-3">
                @if ($kaprodi->photo != null)
                    <div class="col text-center">
                        <img src="{{ asset($kaprodi->photo) }}" alt="Ketua Program Studi" style="width: 300px;">
                    </div>
                @endif
                <div class="col">
                    <p class="subJudulNamaKaprodi">{{ $kaprodi->nama }}</p>
                    <p style="margin-top: -15px">Ketua Program Studi Manajemen</p>
                    <p style="text-align: justify">{!! $kaprodi->kutipan !!}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="bgGrey">
        <div class="container">
            <div class="row mt-5 border-bottom border-2">
                <p class="subJudul">Berita Terbaru</p>
            </div>
            <div class="row mt-3">
                @foreach ($latest_news as $news)
                    <div class="card mx-auto" style="width: 18rem;">
                        <h6>{{ $news->created_at->translatedFormat('l, d m Y') }}</h6>
                        <img src="{{ $news->photo }}" class="card-img-top cardImage" alt={{ $news->slug }}>
                        <div class="card-body">
                            <h5 class="card-title">{{ $news->title }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3 border-bottom border-2">
            <p class="subJudul">Kerja Sama</p>
        </div>
        <div class="row mt-3">
            <div class="col text-center"><img src={{ asset('assets/images/CISCO_1.png') }} alt="" class="imageKerjaSama">
            </div>
            <div class="col text-center"><img src={{ asset('assets/images/unsri_1.png') }} alt="" class="imageKerjaSama">
            </div>
            <div class="col text-center"><img src={{ asset('assets/images/foresec_1.png') }} alt=""
                    class="imageKerjaSama">
            </div>
        </div>
    </div>

    <div class="bgGrey">
        <div class="container">
            <div class="row mt-5 border-bottom border-2">
                <p class="subJudul">ALUMNI</p>
            </div>
            <div class="row mt-3">
                @foreach ($alumnus as $alumni)
                    <div class="col text-center">
                        <img src="{{ $alumni->photo }}" class="rounded-circle imgAlumni mb-3" alt="...">
                        <p>{{ $alumni->nama }}</p>
                        <p>{{ $alumni->profesi }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('new_ui.partials.footer')
@endsection
