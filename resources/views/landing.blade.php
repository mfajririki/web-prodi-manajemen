@extends('layouts.public')

@section('content')
<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Beranda Sarjana Manajemen." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
                <meta property="position" content="1">
            </span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 30px 0px;">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 35px 0px 20px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #163269 ;">
                                        Program Studi Manajemen </h3>
                                </div>
                            </div>
                        </div>

                        <!-- konten halaman utama. Manajemen -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">

                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
{{-- Tab Content --}}
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                                    
{{-- Judul Tab --}}
                                                    <div class="gdlr-core-tab-item-wrap">
                                                        <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                            <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Tentang Prodi Manajemen</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="2">Visi</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="3">Misi</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="4">Tujuan</div>
                                                        </div>

                                                        <div class="gdlr-core-tab-item-content-wrap clearfix">
                                    {{-- Tentang Prodi Manajemen --}}
                                                            <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: min(4vw, 22px);font-weight: 700 ;text-transform: none ;color: #314e85;">
                                                                             <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify">
                                                                    @foreach ($tentang as $tentang)
                                                                        <p style="font-size: min(3vw, 18px);">{!! $tentang->konten_tentang!!}</p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                            <!-- Visi -->
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="2" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Visi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify" style="font-size: min(3vw, 18px);">
                                                                    @foreach ($visi_misi as $visi)
                                                                        <p>
                                                                            {!! $visi->visi !!}
                                                                        </p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                    {{-- Misi --}}
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="3" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Misi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify" style="margin-left: -50px;">
                                                                    @foreach ($visi_misi as $misi)
                                                                        <div style="font-size: min(3vw, 18px);">
                                                                            {!! $misi->misi !!}
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                    {{-- Tujuan --}}   
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="4" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Tujuan<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify" style="margin-left: -50px;">
                                                                    @foreach ($tujuan as $tujuan)
                                                                    <div style="font-size: min(3vw, 18px);">
                                                                        {!! $tujuan->konten_tujuan !!}
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Info -->
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 35px 0px 30px 0px;">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="text-18" class="widget widget_text kingster-widget">
                            <div class="textwidget">
                                <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                    <div class="gdlr-core-widget-box-shortcode-content">
                                        </p>
                                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Universitas Bina Darma</h3>
                                        <p><span style="color: #3db166; font-size: 16px; font-weight: 600;">Program Studi Manajemen</span>
                                            <br /> <span style="font-size: 15px;"><br />Jl. Jenderal A. Yani No. 3 Palembang<br/>Sumatera Selatan, Indonesia</span></p>
                                        <p><span style="font-size: 15px;">0711-515582<br /> universitas@binadarma.ac.id<br /> </span></p>
                                        <p><span style="font-size: 16px; color: #3db166;">Senin-Jumat  08:00 &#8211; 16:00 <br/> Sabtu  08:00 &#8211; 12:00</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                                            <a href="https://api.whatsapp.com/send?phone=628117155582&text=Saya%20Ingin%20info%20Mahasiswa%20Baru%20Universitas%20Bina%20Darma" target="_blank" class="gdlr-core-social-network-icon" title="whatsapp" style="color: #3db166 ;"><i class="fa fa-whatsapp" ></i></a>
                                            <a href="https://www.facebook.com/UBDPalembang/" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a>                                           
                                            <a href="https://www.instagram.com/ubd_palembang/" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a>
                                            <a href="https://www.youtube.com/BINADARMATV" target="_blank" class="gdlr-core-social-network-icon" title="youtube" style="color: #3db166 ;"><i class="fa fa-youtube" ></i></a>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <!-- PMB -->
        <div class="gdlr-core-pbf-wrapper " style="padding: 65px 0px 60px 0px; margin: 100px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-39084">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 30px 0px 0px 0px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none ;color: #ffffff ;">

                                            <div class="gdlr-core-blockquote-item-quote gdlr-core-quote-font" style="font-size: 170px ; margin-top: -120px">“</div>
                                            @foreach ($profile_kaprodi as $kaprodi)
                                            <p style="margin-top: -120px" align="justify">
                                                {!! $kaprodi->kutipan !!}
                                            </p>
                                            <p>
                                                <span style="font-weight: bold;">{{ $kaprodi->nama }}</span>
                                                <br>Ketua Program Studi Manajemen
                                            </p>
                                            @endforeach                                            
                                        </div>
                                    </div>
                                </div>
{{-- Informasi Pendaftaran | Informasi Jalur Pendaftaran --}}
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">
                                        <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border" href="https://pmb.binadarma.ac.id" target="_blank" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;margin: 0px 10px 10px 0px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #d61b23 ;"><span class="gdlr-core-content">Informasi Pendaftaran</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"></i></a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Profile Photo --}}
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-284">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -123px 0px 0px 0px;padding: 0px 0px 0px 40px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                            @foreach ($profile_kaprodi as $kaprodi)
                                            @if ($kaprodi->photo != null)
                                            <img src="{{ $kaprodi->photo }}" width="450px" height="450px" />
                                            @endif                                            
                                            @endforeach                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection