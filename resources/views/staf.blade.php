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
            <span property="name" class="post post-page current-item">Staf Pengajar</span>
            <meta property="url" content="index.html"><meta property="position" content="2"></span>
        </div>
    </div>
</div>  

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper" >
<div class="gdlr-core-page-builder-body">
  <div class="gdlr-core-pbf-sidebar-wrapper "  >
     <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
        <!-- Right Widget -->
        <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 40px 0px 0px 0px;"  >
           <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel"  >
              <div class="gdlr-core-pbf-element" >
                 <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;"  >
                    <div class="gdlr-core-title-item-title-wrap clearfix" >
                       <h3 class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-with-side-border" style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #223d71 ;margin-right: 30px ;"  >Staf Pengajar</h3>
                       <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"  ></div>
                    </div>
                 </div>
              </div>

              <div class="gdlr-core-pbf-element" >
                 <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium"  >
                    
                    <!-- Table -->
                    <table class="table" style="font-size: min(2vw, 20px);">
                     <thead class="table-dark">
                       <tr>
                         <th scope="col" style="font-size: min(2vw, 20px);">Nama</th>
                         <th scope="col" style="font-size: min(2vw, 20px);">NIDN</th>
                         <th scope="col" style="font-size: min(2vw, 20px);">Jabatan</th>
                       </tr>
                     </thead>
                     <tbody>
                        @foreach ($staf_pengajar as $staf)
                        <tr>
                           <td>{{ $staf->nama }}</td>
                           <td>{{ $staf->nidn}}</td>
                           <td>{{ $staf->jabatan}}</td>
                         </tr>
                        @endforeach
                     </tbody>
                   </table>

                 </div>
                 <center>
                    {{ $staf_pengajar->links() }}
                 </center>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
</div>
@endsection