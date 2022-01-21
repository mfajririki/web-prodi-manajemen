@extends('layouts.public')

@section('content')
<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
   <div class="kingster-breadcrumbs-container kingster-container">
      <div class="kingster-breadcrumbs-item kingster-item-pdlr">
         <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Beranda Sarjana Manajemen." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
            <meta property="position" content="1">
         </span> &gt; <span property="itemListElement" typeof="ListItem">
            <span property="name" class="post post-page current-item">Kurikulum Manajemen</span>
            <meta property="url" content="index.html">
            <meta property="position" content="2">
         </span>
      </div>
   </div>
</div>

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="gdlr-core-page-builder-body">
      <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 30px 0px;">
         <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 35px 0px 20px 0px;">
               <div class="gdlr-core-pbf-sidebar-content-inner">
                  <div class="gdlr-core-pbf-element">
                     <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                        <div class="gdlr-core-title-item-title-wrap clearfix">
                           <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #163269 ;">
                              Kurikulum Manajemen </h3>
                        </div>
                     </div>
                  </div>

                  <!-- konten halaman utama. kurikulum -->
                  <div class="gdlr-core-pbf-element">
                     <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">

                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                           {{-- Tab Content --}}
                           <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " style="margin: 0px -60px 0px -60px">
                              <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                 <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">

                                       {{-- Judul Tab --}}
                                       <div class="gdlr-core-tab-item-wrap">
                                          <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                             <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Distribusi Mata Kuliah</div>
                                             <div class="gdlr-core-tab-item-title " data-tab-id="2">Mata Kuliah Bidang Minat</div>
                                          </div>

                                          <div class="gdlr-core-tab-item-content-wrap clearfix">
                                             {{-- Distribusi Mata Kuliah --}}
                                             <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" style="background-color: #ffffff ;background-position: top right ;">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                   <div class="gdlr-core-title-item-title-wrap ">
                                                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                         Distribusi Mata Kuliah<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                      </h3>
                                                   </div>
                                                </div>
                                                <div class="text-justify">
                                                <table class="table" style="font-size:min(2vw, 15px);">
                                                   <thead class="table-dark">
                                                   <tr>
                                                      <th scope="col" style="font-size:1.3vw;">No</th>
                                                      <th scope="col" style="font-size:1.3vw;">Kode Mata Kuliah</th>
                                                      <th scope="col" style="font-size:1.3vw;">Nama Mata Kuliah</th>
                                                      <th scope="col" style="font-size:1.3vw;">Kelompok Mata Kuliah</th>
                                                      <th scope="col" style="font-size:1.3vw;">SKS</th>
                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 1</td>
                                                      </tr>
                                                      {{-- semester 1 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp 
                                                      @foreach ($kurikulum as $semester1_mk)
                                                         @if ($semester1_mk->semester == 'Semester 1')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester1_mk->kode_mk }}</td>
                                                            @if ($semester1_mk->document == null)
                                                                <td>{{ $semester1_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester1_mk->document) }}"  target="_blank">{{ $semester1_mk->nama_mk }}</a></td>
                                                            @endif                                                            
                                                            <td>{{ $semester1_mk->kelompok_mk }}</td>
                                                            <td>{{ $semester1_mk->sks }}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 1')->sum('sks')}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 2</td>
                                                      </tr>
                                                      {{-- semester 2 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp                        
                                                      @foreach ($kurikulum as $semester2_mk)
                                                         @if ($semester2_mk->semester == 'Semester 2')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester2_mk->kode_mk }}</td>
                                                            @if ($semester2_mk->document == null)
                                                                <td>{{ $semester2_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester2_mk->document) }}"  target="_blank">{{ $semester2_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester2_mk->kelompok_mk }}</td>
                                                            <td>{{ $semester2_mk->sks }}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                                                
                                                      @endforeach
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 2')->sum('sks')}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 3</td>
                                                      </tr>
                                                      {{-- semester 3 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester3_mk)
                                                         @if ($semester3_mk->semester == 'Semester 3')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester3_mk->kode_mk }}</td>
                                                            @if ($semester3_mk->document == null)
                                                                <td>{{ $semester3_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester3_mk->document) }}"  target="_blank">{{ $semester3_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester3_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester3_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 3')->sum('sks')}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 4</td>
                                                      </tr>
                                                      {{-- semester 4 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester4_mk)
                                                         @if ($semester4_mk->semester == 'Semester 4')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester4_mk->kode_mk }}</td>
                                                            @if ($semester4_mk->document == null)
                                                                <td>{{ $semester4_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester4_mk->document) }}"  target="_blank">{{ $semester4_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester4_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester4_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 4')->sum('sks')}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 5</td>
                                                      </tr>
                                                      {{-- semester 5 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester5_mk)
                                                         @if ($semester5_mk->semester == 'Semester 5')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester5_mk->kode_mk }}</td>
                                                            @if ($semester5_mk->document == null)
                                                                <td>{{ $semester5_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester5_mk->document) }}"  target="_blank">{{ $semester5_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester5_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester5_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 1 (Stream 1)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 2 (Stream 1)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 5')->sum('sks') + 8 }}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 6</td>
                                                      </tr>
                                                      {{-- semester 6 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester6_mk)
                                                         @if ($semester6_mk->semester == 'Semester 6')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester6_mk->kode_mk }}</td>
                                                            @if ($semester6_mk->document == null)
                                                                <td>{{ $semester6_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester6_mk->document) }}"  target="_blank">{{ $semester6_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester6_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester6_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 3 (Stream 2)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 4 (Stream 2)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 6')->sum('sks') + 8 }}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 7</td>
                                                      </tr>
                                                      {{-- semester 7 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester7_mk)
                                                         @if ($semester7_mk->semester == 'Semester 7')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester7_mk->kode_mk }}</td>
                                                            @if ($semester7_mk->document == null)
                                                                <td>{{ $semester7_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester7_mk->document) }}"  target="_blank">{{ $semester7_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester7_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester7_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 5 (Stream 3)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 6 (Stream 3)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 7 (Stream 4)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td></td>
                                                         <td>141XXXXXX</td>
                                                         <td>MK Pilihan Minat 8 (Stream 4)</td>
                                                         <td></td>
                                                         <td>4</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 7')->sum('sks') + 16}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="5" style="background-color: yellow; color: black" align="left">Semester 8</td>
                                                      </tr>
                                                      {{-- semester 8 --}}
                                                      @php
                                                         $no = 0;
                                                      @endphp
                                                      @foreach ($kurikulum as $semester8_mk)
                                                         @if ($semester8_mk->semester == 'Semester 8')
                                                            <tr style="color: darkblue">
                                                               <td>{{ $no+1 }}</td>
                                                            <td>{{ $semester8_mk->kode_mk }}</td>
                                                            @if ($semester8_mk->document == null)
                                                                <td>{{ $semester8_mk->nama_mk }}</td>
                                                            @else
                                                            <td><a href="{{ asset($semester8_mk->document) }}"  target="_blank">{{ $semester8_mk->nama_mk }}</a></td>
                                                            @endif
                                                            <td>{{ $semester8_mk->kelompok_mk}}</td>
                                                            <td>{{ $semester8_mk->sks}}</td>
                                                            </tr>
                                                            @php
                                                               $no++;
                                                            @endphp
                                                         @endif                        
                                                      @endforeach
                                                      <tr>
                                                         <td colspan="4">Jumlah SKS</td>
                                                         <td>{{ $kurikulum->where('semester', 'Semester 8')->sum('sks')}}</td>
                                                      </tr>
                                                      <tr style="background-color: cornflowerblue; color: black">
                                                         <td colspan="4">Jumlah Seluruh SKS</td>
                                                         <td>{{ $kurikulum->sum('sks') + 32}}</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                </div>
                                             </div>
                                             <!-- Mata Kuliah Bidang Minat -->
                                             <div class="gdlr-core-tab-item-content " data-tab-id="2" style="background-color: #ffffff ;background-position: top right ;">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                   <div class="gdlr-core-title-item-title-wrap ">
                                                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                         Mata Kuliah Bidang Minat<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                      </h3>
                                                   </div>
                                                </div>
                                                <div class="text-justify">
                                                   <table class="table">
                                                      <thead class="table-dark">
                                                      <tr>
                                                         <th scope="col">Kode Mata Kuliah</th>
                                                         <th scope="col">Nama Mata Kuliah</th>
                                                         <th scope="col">Kelompok Mata Kuliah</th>
                                                         <th scope="col">Semester</th>
                                                         <th scope="col">SKS</th>
                                                         <th scope="col">Stream</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td colspan="6" style="background-color: yellow; color: black" align="left">IT GOVERNANCE</td>
                                                         </tr>
                                                         {{-- IT GOVERNANCE --}}
                                                         @foreach ($mk_bidangminat as $itgovernance)
                                                            @if ($itgovernance->bidangminat == 'IT GOVERNANCE')
                                                               <tr style="color: darkblue">
                                                                  <td>{{ $itgovernance->kode_mk }}</td>
                                                                  <td>{{ $itgovernance->nama_mk }}</td>
                                                                  <td>{{ $itgovernance->kelompok_mk }}</td>
                                                                  <td>{{ $itgovernance->semester }}</td>
                                                                  <td>{{ $itgovernance->sks }}</td>
                                                                  <td>{{ $itgovernance->stream }}</td>
                                                               </tr>
                                                            @endif                        
                                                         @endforeach
                                                         <tr>
                                                            <td colspan="6" style="background-color: yellow; color: black" align="left">DATA SCIENCE</td>
                                                         </tr>
                                                         {{-- DATA SCIENCE --}}
                                                         @foreach ($mk_bidangminat as $datascience)
                                                            @if ($datascience->bidangminat == 'DATA SCIENCE')
                                                               <tr style="color: darkblue">
                                                                  <td>{{ $datascience->kode_mk }}</td>
                                                                  <td>{{ $datascience->nama_mk }}</td>
                                                                  <td>{{ $datascience->kelompok_mk }}</td>
                                                                  <td>{{ $datascience->semester }}</td>
                                                                  <td>{{ $datascience->sks }}</td>
                                                                  <td>{{ $datascience->stream }}</td>
                                                               </tr>
                                                            @endif                        
                                                         @endforeach
                                                         <tr>
                                                            <td colspan="6" style="background-color: yellow; color: black" align="left">ENTERPRISE SYSTEM</td>
                                                         </tr>
                                                         {{-- ENTERPRISE SYSTEM --}}
                                                         @foreach ($mk_bidangminat as $enterprisesystem)
                                                            @if ($enterprisesystem->bidangminat == 'ENTERPRISE SYSTEM')
                                                               <tr style="color: darkblue">
                                                                  <td>{{ $enterprisesystem->kode_mk }}</td>
                                                                  <td>{{ $enterprisesystem->nama_mk }}</td>
                                                                  <td>{{ $enterprisesystem->kelompok_mk }}</td>
                                                                  <td>{{ $enterprisesystem->semester }}</td>
                                                                  <td>{{ $enterprisesystem->sks }}</td>
                                                                  <td>{{ $enterprisesystem->stream }}</td>
                                                               </tr>
                                                            @endif                        
                                                         @endforeach
                                                         <tr>
                                                            <td colspan="6" style="background-color: yellow; color: black" align="left">APPLICATION DEVELOPMENT</td>
                                                         </tr>
                                                         {{-- APPLICATION DEVELOPMENT --}}
                                                         @foreach ($mk_bidangminat as $appdev)
                                                            @if ($appdev->bidangminat == 'APPLICATION DEVELOPMENT')
                                                               <tr style="color: darkblue">
                                                                  <td>{{ $appdev->kode_mk }}</td>
                                                                  <td>{{ $appdev->nama_mk }}</td>
                                                                  <td>{{ $appdev->kelompok_mk }}</td>
                                                                  <td>{{ $appdev->semester }}</td>
                                                                  <td>{{ $appdev->sks }}</td>
                                                                  <td>{{ $appdev->stream }}</td>
                                                               </tr>
                                                            @endif                        
                                                         @endforeach
                                                         <tr>
                                                            <td colspan="6" style="background-color: yellow; color: black" align="left">MULTIMEDIA</td>
                                                         </tr>
                                                         {{-- MULTIMEDIA --}}
                                                         @foreach ($mk_bidangminat as $multimedia)
                                                            @if ($multimedia->bidangminat == 'MULTIMEDIA')
                                                               <tr style="color: darkblue">
                                                                  <td>{{ $multimedia->kode_mk }}</td>
                                                                  <td>{{ $multimedia->nama_mk }}</td>
                                                                  <td>{{ $multimedia->kelompok_mk }}</td>
                                                                  <td>{{ $multimedia->semester }}</td>
                                                                  <td>{{ $multimedia->sks }}</td>
                                                                  <td>{{ $multimedia->stream }}</td>
                                                               </tr>
                                                            @endif                        
                                                         @endforeach
                                                      </tbody>
                                                   </table>
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
         </div>
      </div>
   </div>
</div>
@endsection