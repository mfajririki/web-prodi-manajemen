@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    @include('new_ui.partials.header')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Tentang Prodi Manajemen</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        @foreach ($tentang as $tentangprodi)
            <p style="text-align: justify"> {!! $tentangprodi->konten_tentang !!} </p>
        @endforeach
    </div>

    @include('new_ui.partials.footer')
@endsection
