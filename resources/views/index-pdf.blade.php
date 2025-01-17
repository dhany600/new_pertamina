<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <!-- title -->
    <title>Kaleidoskop Pertamina</title>

    <!-- add css style -->
    <link type="text/css" href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/css/awikwok.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    {{-- <link type="text/css" href="{{ asset('asset/css/main.css') }}" rel="stylesheet"> --}}

    <!-- add js code -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/jquery_no_conflict.js') }}"></script>
    <script src="{{ asset('asset/js/turn.js') }}"></script>
    <script src="{{ asset('asset/js/wait.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.fullscreen.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.address-1.6.min.js') }}"></script>
    <script src="{{ asset('asset/js/pdf.js') }}"></script>
    <script src="{{ asset('asset/js/onload.js') }}"></script>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow: auto !important;
        }
    </style>

</head>

<body>

    <!-- begin flipbook  -->
    <div id="fb5-ajax" data-cat="ebook" data-template="true">

        <!-- BACKGROUND FLIPBOOK -->
        <div class="fb5-bcg-book"></div>

        <!-- BEGIN PRELOADER -->
        <div class="fb5-preloader"></div>
        <!-- END PRELOADER -->

        <!-- BEGIN STRUCTURE HTML FLIPBOOK -->
        <div class="fb5" id="fb5">

            <!-- CONFIGURATION BOOK -->
            <section id="config">
                <ul>
                    <li key="page_width">2018</li> <!-- width for page -->
                    <li key="page_height">2410</li> <!-- height for page -->
                    <li key="gotopage_width">25</li> <!-- width for field input goto page -->
                    <li key="zoom_double_click">1</li> <!-- value zoom after double click -->
                    <li key="zoom_step">0.06</li> <!-- zoom step ( if click icon zoomIn or zoomOut -->
                    <li key="toolbar_visible">true</li> <!-- enabled/disabled toolbar -->
                    <li key="tooltip_visible">true</li> <!-- enabled/disabled tooltip for icon -->
                    <li key="deeplinking_enabled">true</li> <!-- enabled/disabled deeplinking -->
                    <li key="lazy_loading_pages">true</li> <!-- enabled/disabled lazy loading for pages in flipbook -->
                    <li key="lazy_loading_thumbs">true</li> <!-- enabled/disabled lazdy loading for thumbs -->
                    <li key="double_click_enabled">true</li> <!-- enabled/disabled double click mouse for flipbook -->
                    <li key="rtl">false</li> <!-- enabled/disabled 'right to left' for eastern countries -->
                    <li key="pdf_url">{{ asset('asset/img/16okt.pdf') }}</li> <!-- pathway to a pdf file ( the file will be read live ) -->
                    <!-- pathway to a pdf file ( the file will be read live ) -->
                    <li key="pdf_scale">4</li>
                    <!-- to live a pdf file (if you want to have a strong zoom - increase the value) -->
                    <li key="page_mode">double</li> <!-- value to 'single', 'double', or 'auto' -->
                    <li key="sound_sheet"></li> <!-- sound for sheet -->
                </ul>
            </section>

            <!-- BEGIN CONTAINER BOOK -->
            <div id="fb5-container-book">

                <!-- BEGIN deep linking -->
                <section id="fb5-deeplinking">
                    <ul>
                        @for ($i = 1; $i < 114; $i++)
                            <li data-address="{{ $i }}" data-page="{{ $i }}"></li>
                        @endfor
                    </ul>
                </section>
                <!-- END deep linking -->

                <!-- BEGIN ABOUT -->
                <section id="fb5-about" >
                </section>
                <!-- END ABOUT -->

                <!-- BEGIN LINKS -->
                <section id="links">

                </section>
                <!-- END LINKS -->

                <div class="book" id="page25">
                    <!-- For Next/Prev Controls -->
                    <input type="checkbox" id="c1">
                    <input type="checkbox" id="c2">
                    <!-- Book Cover -->
                    <div id="cover">
                    </div>
                    <!-- Pages -->
                    <div class="flip-book">
                        <!-- Page 1 -->
                        <div class="flip" id="p1">
                            <div class="back">
                                <img src="{{ asset('asset/img/image-part-1.jpg') }}" alt="">
                            </div>
                            <div class="front">
                            </div>
                        </div>
                        <!-- Page 2 -->
                        <div class="flip" id="p2">
                            <div class="inner-page inner-1">
                                <div class="back">
                                    <img src="{{ asset('asset/img/image-part-2.jpg') }}" alt="">
                                </div>
                                <div class="front">
                                    <img src="{{ asset('asset/img/image-part-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="inner-page inner-2">
                                <div class="back">
                                    <img src="{{ asset('asset/img/Cakrawala Proyek_Divider.jpg') }}" alt="">
                                </div>
                                <div class="front">
                                    <img src="{{ asset('asset/img/image-part-3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book" id="page181">
                    <input type="checkbox" id="c3">
                    <input type="checkbox" id="c4">
                    <!-- Book Cover -->
                    <div id="cover">
                    </div>
                    <!-- Pages -->
                    <div class="flip-book">
                        <!-- Page 3 -->
                        <div class="flip" id="p3">
                            <div class="back">
                                <img src="{{ asset('asset/img/triplet-1.jpg') }}" alt="">
                            </div>
                            <div class="front">
                            </div>
                        </div>
                        <!-- Page 4 -->
                        <div class="flip" id="p4">
                            <div class="inner-page inner-1">
                                <div class="back">
                                    <img src="{{ asset('asset/img/triplet-2.jpg') }}" alt="">
                                </div>
                                <div class="front">
                                    <img src="{{ asset('asset/img/triplet-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="inner-page inner-4">
                                <div class="back">
                                    <img src="{{ asset('asset/img/cover-page-177-1.jpg') }}" alt="">
                                </div>
                                <div class="front">
                                    <img src="{{ asset('asset/img/triplet-3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book" id="page209">
                    <input type="checkbox" id="c5">
                    <input type="checkbox" id="c6">
                    <!-- Book Cover -->
                    <div id="cover">
                    </div>
                    <!-- Pages -->
                    <div class="flip-book">
                        <!-- Page 3 -->
                        <div class="flip" id="p5">
                            <div class="back">
                                {{-- <img src="{{ asset('asset/img/triplet-1.jpg') }}" alt=""> --}}
                            </div>
                            <div class="front">
                            </div>
                        </div>
                        <!-- Page 4 -->
                        <div class="flip" id="p6">
                            <div class="inner-page inner-1">
                                <div class="back">
                                    {{-- <img src="{{ asset('asset/img/triplet-2.jpg') }}" alt=""> --}}
                                </div>
                                <div class="front">
                                    <video width="100%" id="video1" style="position: absolute; top: 50%; transform: translateY(-50%)" controls autoplay>
                                        <source src="{{ asset('asset/img/videoplayback.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN PAGES -->
                <div id="fb5-book">
                </div>
                <!-- END PAGES -->
                
                

            </div>
            <!-- END CONTAINER BOOK -->

            <!-- BEGIN FOOTER -->
            <div id="fb5-footer">

                <div class="fb5-bcg-tools"></div>

                <a id="fb5-logo" target="_blank" href="http://codecanyon.net/user/flashmaniac?ref=flashmaniac">
                    <img alt="" src="{{ asset('asset/img/logo.png') }}">

                </a>

                <div class="fb5-menu" id="fb5-center">
                    <ul>

                        <!-- icon_home -->
                        <li>
                            <a title="show home page" class="fb5-home"><i class="fa fa-home"></i></a>
                        </li>

                        <!-- icon download -->
                        <li>
                            <a title="download pdf" class="fb5-download" href="img/file.zip"><i class="fa fa-download"></i></a>
                        </li>

                        <!-- icon arrow left -->
                        <li>
                            <a title="prev page" class="fb5-arrow-left"><i class="fa fa-chevron-left"></i>
                            </a>
                        </li>

                        <!-- icon arrow right -->
                        <li>
                            <a title="next page" class="fb5-arrow-right"><i class="fa fa-chevron-right"></i>
                            </a>
                        </li>

                        <!-- icon_zoom_in -->
                        <li>
                            <a title="zoom in" class="fb5-zoom-in"><i class="fa fa-search-plus"></i></a>
                        </li>

                        <!-- icon_zoom_out -->
                        <li>
                            <a title="zoom out" class="fb5-zoom-out"><i class="fa fa-search-minus"></i></a>
                        </li>

                        <!-- icon_zoom_auto -->
                        <li>
                            <a title="zoom auto" class="fb5-zoom-auto"><i class="fa fa-search"></i></a>
                        </li>

                        <!-- icon_allpages -->
                        <li>
                            <a title="show all pages" class="fb5-show-all"><i class="fa fa-list"></i></a>
                        </li>

                        <!-- icon fullscreen -->
                        <li>
                            <a title="full/normal screen" class="fb5-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="fb5-menu" id="fb5-right">
                    <ul>
                        <!-- icon page manager -->
                        <li class="fb5-goto">
                            <label for="fb5-page-number" id="fb5-label-page-number"></label>
                            <input type="text" id="fb5-page-number" style="width: 25px;">
                            <span id="fb5-page-number-two"></span>

                        </li>
                    </ul>
                </div>

            </div>
            <!-- END FOOTER -->

            <!-- BEGIN ALL PAGES -->
            <div id="fb5-all-pages" class="fb5-overlay">

                <section class="fb5-container-pages">

                    <div id="fb5-menu-holder">

                        <ul id="fb5-slider">

                        </ul>

                    </div>

                </section>

            </div>
            <!-- END ALL PAGES -->

            <!-- BEGIN SOUND FOR SHEET  -->
            <audio preload="auto" id="sound_sheet"></audio>
            <!-- END SOUND FOR SHEET -->

            <!-- BEGIN CLOSE LIGHTBOX  -->
            <div id="fb5-close-lightbox">
                <i class="fa fa-times pull-right"></i>
            </div>
            <!-- END CLOSE LIGHTBOX -->

        </div>
        <!-- END STRUCTURE HTML FLIPBOOK -->

    </div>
    <!-- end flipbook -->

</body>

</html>
