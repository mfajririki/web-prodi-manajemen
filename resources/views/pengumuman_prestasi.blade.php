@extends('layouts.public')

@section('content')

<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Beranda." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
                <meta property="position" content="1">
            </span> &gt; <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Pengumuman</span>
                <meta property="url" content="index.html">
                <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    @foreach($announcements as $announcement)
                                    @if ($announcement->category == 'Prestasi')

                                    <!-- Item -->
                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">

                                        @if(!is_null($announcement->photo))
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="{{ route('pengumuman_detail', $announcement) }}">
                                                <img src="{{ asset($announcement->photo) }}" width="900" height="250" alt="" />
                                            </a>
                                        </div>
                                        @endif

                                        <!-- Content -->
                                        <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                            <div class="gdlr-core-blog-full-head clearfix">
                                                <div class="gdlr-core-blog-full-head-right">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;">
                                                        <a href="{{ route('pengumuman_detail', $announcement) }}">{{ $announcement->title }}</a>
                                                    </h3>

                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">{{ $announcement->created_at->diffForHumans() }}</span>

                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head">By</span><a title="Posts by Manajemen UBD" rel="author">Manajemen UBD</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-blog-content clearfix">
                                                {{ strip_tags( substr($announcement->content, 0, 150) ) }} ...
                                                <div class="clear"></div>
                                                <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="{{ route('pengumuman_detail', $announcement) }}">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>

                                <!-- Pagination -->
                                {{ $announcements->links('vendor.pagination.custom') }}

                            </div>
                        </div>
                    </div>
                </div>                
                
                <!-- Side News -->
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                    <div class="container" style="padding-bottom: 10px">
                        <h6>Kategori</h6>
                        <button type="button" class="btn btn-success"><a href="{{ route('pengumuman') }}">Semua</a></button>
                        <button type="button" class="btn btn-success"><a href="{{ route('pengumuman_only') }}">Pengumuman</a></button>
                        <button type="button" class="btn btn-success"><a href="{{ route('pengumuman_berita') }}">Berita</a></button>
                        <button type="button" class="btn btn-success"><a href="{{ route('pengumuman_prestasi') }}">Prestasi</a></button>
                    </div>
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                            <h3 class="kingster-widget-title">Pengumuman Terbaru</h3>
                            <span class="clear"></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                                @forelse ($latests as $latest)
                                <!-- Item -->
                                <div class="gdlr-core-recent-post-widget clearfix">

                                    @if(!is_null($latest->photo))
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="{{ asset($latest->photo) }}" alt="" width="150" height="150" title="{{ $latest->title }}" /></div>
                                    @endif

                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a href="{{ route('pengumuman_detail', $latest) }}">{{ $latest->title }}</a>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">{{ $latest->created_at->diffForHumans() }}</span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head">By </span>Manajemen UBD</span></div>
                                    </div>
                                </div>
                                @empty
                                <!-- Item -->
                                <div class="gdlr-core-recent-post-widget clearfix">

                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title">
                                            <center>
                                                Belum ada data
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                @endforelse

                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection