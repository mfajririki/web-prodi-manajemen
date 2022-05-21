@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    @include('new_ui.partials.header_info')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Informasi</p>
                <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Pengumuman</p>
        </div>
    </div>

    <div class="container">
        @foreach ($announcements as $announcement)
            @if ($announcement->category == 'Pengumuman')
                <div class="row rounded my-4 p-3 boxShadow">
                    <div class="col text-center">
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

    @include('new_ui.partials.footer')
@endsection
