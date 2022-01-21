@extends('layouts.public')

@section('content')
<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container" >
        <div class="kingster-breadcrumbs-item kingster-item-pdlr" >
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Beranda." href="{{ url('') }}" class="home" ><span property="name">Beranda</span></a>
            <meta property="position" content="1">
        </span> &gt; <span property="itemListElement" typeof="ListItem">
            <span property="name" class="post post-page current-item">Bimbingan Akademik</span>
            <meta property="url" content="index.html"><meta property="position" content="2"></span>
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
                                   <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Bimbingan Akademik</h3></div>
                           </div>
                       </div>
                       <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                               <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                   <table class="table table-striped">
                                    @foreach ($pembimbing_akademik as $document)
                                      <tr>
                                         <td style="text-align: start; color: black">{{ $document->title }}</td>
                                         <td><a target="_blank"
                                            class="gdlr-core-button gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-with-border"
                                            href="{{ asset($document->document) }}"
                                            style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;color: #d61b23 ;padding: 13px 26px 16px 30px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #ffffff ;border-color: #d61b23 ;"><span
                                                class="gdlr-core-content">Download</span><i
                                                class="gdlr-core-pos-right fa fa-file-pdf-o"
                                                style="font-size: 14px ;"></i></a></td>
                                      </tr>
                                      @endforeach  
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{-- sidebar --}}
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
                                          <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a>
                                          <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a>
                                          <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div>
                                       <p>
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