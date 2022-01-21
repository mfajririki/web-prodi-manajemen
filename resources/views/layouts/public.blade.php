<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Manajemen Universitas Bina Darma</title>

    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset("assets/css/dist/block-library/style.min76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='{{ asset("assets/content/plugins/contact-form-7/includes/css/styles7661.css?ver=5.4.2") }}' type='text/css' media='all' />

    <link rel='stylesheet' id='font-awesome-css' href='{{ asset("assets/content/plugins/goodlayers-core/plugins/fontawesome/font-awesome76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elegant-font-css' href='{{ asset("assets/content/plugins/goodlayers-core/plugins/elegant/elegant-font76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='gdlr-core-plugin-css' href='{{ asset("assets/content/plugins/goodlayers-core/plugins/styleba44.css?ver=1623216733") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='gdlr-core-page-builder-css' href='{{ asset("assets/content/plugins/goodlayers-core/include/css/page-builder76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset("assets/content/plugins/revslider/public/assets/css/rs649c2.css?ver=6.2.22") }}' type='text/css' media='all' />

    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>

    <link rel='stylesheet' id='newsletter-css' href='{{ asset("assets/content/plugins/newsletter/style77a2.css?ver=7.2.7") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='wpgmp-frontend_css-css' href='{{ asset("assets/content/plugins/wp-google-map-plugin/assets/css/frontend76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='kingster-style-core-css' href='{{ asset("assets/content/themes/kingster/css/style-core76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='kingster-custom-style-css' href='{{ asset("assets/content/uploads/kingster-style-custom479c.css?1623216733&amp;ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='kingster-learnpress-css' href='{{ asset("assets/content/themes/kingster/learnpress/kingster-learnpress76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='kingster-learnpress-pb-css' href='{{ asset("assets/content/themes/kingster/learnpress/kingster-learnpress-pb76f3.css?ver=5.7.3") }}' type='text/css' media='all' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type='text/javascript' src='{{ asset("assets/js/jquery/jquery.min9d52.js?ver=3.5.1") }}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset("assets/js/jquery/jquery-migrate.mind617.js?ver=3.3.2") }}' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='{{ asset("assets/content/plugins/revslider/public/assets/js/rbtools.min49c2.js?ver=6.2.22") }}' id='tp-tools-js'></script>
    <script type='text/javascript' src='{{ asset("assets/content/plugins/revslider/public/assets/js/rs6.min49c2.js?ver=6.2.22") }}' id='revmin-js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- head -->

<body class="post-template-default single single-post postid-13735 single-format-standard gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blog-style-1  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- Body -->
    {{-- start navbar mobile --}}
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="{{ route('landing') }}"><img src="{{ url('assets/content/uploads/2021/06/ubd_logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item"><a href="{{ route('landing') }}">Beranda</a></li>
                                <li class="menu-item"><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Kurikulum</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('kurikulum_konten') }}">Kurikulum Manajemen</a></li>
                                        <li class="menu-item"><a href="{{ route('bimbingan_akademik') }}">Bimbingan Akademik</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{ route('halpanduan') }}">Panduan</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Tentang</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="/staf">Staf Pengajar</a></li>
                                        <li class="menu-item"><a href="/profilelulusan">Profil Lulusan</a></li>
                                    </ul>
                                </li>
                                <ul class="menu-item">
                                    @guest
                                    <li class="menu-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    @else
                                    <li class="menu-item">
                                        <a class="nav-link" href="{{ route('login') }}">Admin</a>
                                    </li>
                                    @endguest
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end navbar mobile --}}
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <!-- Header Navbar -->            
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="{{ route('landing') }}"><img src="{{ url('assets/content/uploads/2021/06/ubd_logo.png') }}" alt="" width="100" title="logo-fasilkom-white-2" /></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Beranda</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ ($title === "Pengumuman") ? 'active' : '' }}" href="{{ route('pengumuman') }}">Pengumuman</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link {{ ($title === "Kurikulum" || $title === "Bimbingan Akademik") ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Kurikulum
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="{{ route('kurikulum_konten') }}">Kurikulum Manajemen</a></li>
                              <li><a class="dropdown-item" href="{{ route('bimbingan_akademik') }}">Bimbingan Akademik</a></li>                          
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ ($title === "Panduan") ? 'active' : '' }}" href="{{ route('halpanduan') }}">Panduan</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link {{ ($title === "Staf Pengajar" || $title === "Profil Lulusan") ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Tentang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/staf">Staf Pengajar</a></li>
                              <li><a class="dropdown-item" href="/profilelulusan">Profil Lulusan</a></li>                          
                            </ul>
                          </li>                                           
                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Admin</a>
                            </li>
                            @endguest
                        </ul>                     
                      </div>
                    </div>
                </nav>
            </header>

            {{-- Slider --}}
            <div style="background-color: #202021;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @if ($sliders == [])
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        @else
                            @foreach ($sliders as $no => $slider)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $no }}" class="{{ ($no === 0) ? 'active' : '' }}" aria-current="{{ ($no === 0) ? 'true' : '' }}" aria-label="Slide {{ $no+1 }}"></button>
                            @endforeach
                        @endif                        
                    </div>
                    <div class="carousel-inner">
                        @if ($sliders == [])
                            <div class="carousel-item active">
                                <img src="images/slider.png" class="d-block w-100" alt="slider" style="height: 275px;">
                            </div>
                        @else
                            @foreach ($sliders as $no => $slider)
                            <div class="carousel-item {{ ($no === 0) ? 'active' : '' }}">
                                <img src="{{ asset($slider->photo) }}" class="d-block w-100" alt="{{ $slider->nama }}" style="height: 275px;">
                            </div>
                            @endforeach
                        @endif                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

            @yield('content')

            <!-- Footer -->
            <footer class="">
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                                <div class="textwidget">
                                    <p><img src="{{ url('assets/content/uploads/2021/06/ubd_logo.png') }}" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                        <br /> 30264
                                        <br /> Jalan Jenderal Ahmad Yani No.12 Plaju
                                        <br /> Palembang, Sumatera Selatan</p>
                                    <p><span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                                        <span>universitas@binadarma.ac.id</span></p>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Kontak</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                    <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item">No. Telepon<br/>0711-515582</li>
                                        <li class="menu-item">Layanan PPM<br/>0821-8061-0336/0821-7967-3360</li>
                                        <li class="menu-item">Layanan PMB<br/>0811-7155-582/0811-1725-582</li>                          
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Our Campus</h3><span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="https://www.binadarma.ac.id/" target="_blank">Portal Web UBD</a></li>
                                        <li class="menu-item"><a href="https://sisfo.binadarma.ac.id/" target="_blank">Manajemen Akademik</a></li>
                                        <li class="menu-item"><a href="https://elearning.binadarma.ac.id/" target="_blank">E-Learning</a></li>                                                                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Social Info</h3><span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="https://www.facebook.com/UBDPalembang/" target="_blank">Facebook</a></li>
                                        <li class="menu-item"><a href="https://www.instagram.com/ubd_palembang/" target="_blank">Instagram</a></li>
                                        <li class="menu-item"><a href="https://www.youtube.com/BINADARMATV" target="_blank">Youtube</a></li>                                                                                
                                    </ul>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>

                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">&copy; Copyright All Rights Reserved 2021, Universitas Bina Darma.</div>
                        <div class="kingster-copyright-right kingster-item-pdlr">
                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <style>
        #gdlr-core-column-39084 .gdlr-core-pbf-column-content-margin:hover,
        #gdlr-core-column-39084 .gdlr-core-pbf-column-content-margin:hover .gdlr-core-pbf-background-wrap,
        #gdlr-core-column-39084 .gdlr-core-pbf-column-content-margin:hover .gdlr-core-pbf-background-frame {
            border-color: #ffffff !important;
        }

        #gdlr-core-column-284 .gdlr-core-pbf-column-content-margin:hover,
        #gdlr-core-column-284 .gdlr-core-pbf-column-content-margin:hover .gdlr-core-pbf-background-wrap,
        #gdlr-core-column-284 .gdlr-core-pbf-column-content-margin:hover .gdlr-core-pbf-background-frame {
            border-color: #ffffff !important;
        }

        @media only screen and (max-width: 767px) {
            #gdlr-core-column-284 .gdlr-core-pbf-column-content-margin {
                margin-top: 0px !important;
            }
        }
    </style>

    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>

    <script>
        /* <![CDATA[ */
        var tribe_l10n_datatables = {
            "aria": {
                "sort_ascending": ": activate to sort column ascending",
                "sort_descending": ": activate to sort column descending"
            },
            "length_menu": "Show _MENU_ entries",
            "empty_table": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "info_empty": "Showing 0 to 0 of 0 entries",
            "info_filtered": "(filtered from _MAX_ total entries)",
            "zero_records": "No matching records found",
            "search": "Search:",
            "all_selected_text": "All items on this page were selected. ",
            "select_all_link": "Select all pages",
            "clear_selection": "Clear Selection.",
            "pagination": {
                "all": "All",
                "next": "Next",
                "previous": "Previous"
            },
            "select": {
                "rows": {
                    "0": "",
                    "_": ": Selected %d rows",
                    "1": ": Selected 1 row"
                }
            },
            "datepicker": {
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Prev",
                "currentText": "Today",
                "closeText": "Done",
                "today": "Today",
                "clear": "Clear"
            }
        }; /* ]]> */
    </script>

    <script type='text/javascript' src='{{ asset("assets/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4") }}' id='wp-polyfill-js'></script>

    <script type='text/javascript' id='wp-polyfill-js-after'>
        ('fetch' in window) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>');
        (document.contains) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.DOMRect) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
        (window.FormData && window.FormData.prototype.keys) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
        (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>');
        ('objectFit' in document.documentElement.style) || document.write('<script src="assets/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
    </script>

    <script type='text/javascript' src='{{ asset("assets/content/plugins/contact-form-7/includes/js/index7661.js?ver=5.4.2") }}' id='contact-form-7-js'></script>

    <script type='text/javascript' id='gdlr-core-page-builder-js-extra'>
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            }
        };
        /* ]]> */
    </script>

    <script type='text/javascript' src='{{ asset("assets/content/plugins/goodlayers-core/include/js/page-builderd36b.js?ver=1.3.9") }}' id='gdlr-core-page-builder-js'></script>
    <script type='text/javascript' src='{{ asset("assets/js/jquery/ui/effect.min35d0.js?ver=1.12.1") }}' id='jquery-effects-core-js'></script>
    <script type='text/javascript' src='{{ asset("assets/content/themes/kingster/js/script-core8a54.js?ver=1.0.0") }}' id='kingster-script-core-js'></script>
    <script type='text/javascript' src='{{ asset("assets/js/wp-embed.min76f3.js?ver=5.7.3") }}' id='wp-embed-js'></script>
</body>

</html>