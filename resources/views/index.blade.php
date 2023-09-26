<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <!-- title -->
    <title>Kaleidoskop Pertamina</title>

    <!-- add css style -->
    <link type="text/css" href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    <link type="text/css" href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/css/main.css') }}" rel="stylesheet">

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
    <div id="fb5-ajax" data-cat="your_book_name" data-template="true">

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
                    <li key="page_width">595</li> <!-- width for page -->
                    <li key="page_height">708</li> <!-- height for page -->
                    <li key="gotopage_width">25</li> <!-- width for field input goto page -->
                    <li key="zoom_double_click">1</li> <!-- value zoom after double click -->
                    <li key="zoom_max">1</li> <!-- value zoom after double click -->
                    <li key="zoom_step">0.06</li> <!-- zoom step ( if click icon zoomIn or zoomOut -->
                    <li key="toolbar_visible">true</li> <!-- enabled/disabled toolbar -->
                    <li key="tooltip_visible">true</li> <!-- enabled/disabled tooltip for icon -->
                    <li key="deeplinking_enabled">true</li> <!-- enabled/disabled deeplinking -->
                    <li key="lazy_loading_pages">false</li> <!-- enabled/disabled lazy loading for pages in flipbook -->
                    <li key="lazy_loading_thumbs">false</li> <!-- enabled/disabled lazdy loading for thumbs -->
                    <li key="double_click_enabled">true</li> <!-- enabled/disabled double click mouse for flipbook -->
                    <li key="rtl">false</li> <!-- enabled/disabled 'right to left' for eastern countries -->
                    <li key="pdf_url"></li> <!-- pathway to a pdf file ( the file will be read live ) -->
                    <li key="pdf_scale">1</li>
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
                        <li data-address="page1" data-page="1"></li>
                        <li data-address="page2" data-page="2"></li>
                        <li data-address="page3" data-page="3"></li>
                        <li data-address="page4" data-page="4"></li>
                        <li data-address="page5" data-page="5"></li>
                        <li data-address="page6" data-page="6"></li>
                        <li data-address="page7" data-page="7"></li>
                        <li data-address="page8" data-page="8"></li>
                        <li data-address="page9" data-page="9"></li>
                        <li data-address="page10" data-page="10"></li>
                        <li data-address="page11" data-page="11"></li>
                        <li data-address="page12" data-page="12"></li>
                        <li data-address="page13" data-page="13"></li>
                        <li data-address="page14" data-page="14"></li>
                        <li data-address="page15" data-page="15"></li>
                        <li data-address="page16" data-page="16"></li>
                        <li data-address="page17" data-page="17"></li>
                        <li data-address="page18" data-page="18"></li>
                        <li data-address="page19" data-page="19"></li>
                        <li data-address="page20" data-page="20"></li>
                        <li data-address="page21" data-page="21"></li>
                        <li data-address="page22" data-page="22"></li>
                        <li data-address="page23" data-page="23"></li>
                        <li data-address="page24" data-page="24"></li>
                        <li data-address="page25" data-page="25"></li>
                        <li data-address="page26" data-page="26"></li>
                        <li data-address="page27" data-page="27"></li>
                        <li data-address="page28" data-page="28"></li>
                        <li data-address="page29" data-page="29"></li>
                        <li data-address="page30" data-page="30"></li>
                        <li data-address="page31" data-page="31"></li>
                        <li data-address="page32" data-page="32"></li>
                    </ul>
                </section>
                <!-- END deep linking -->

                <!-- BEGIN ABOUT -->
                <section id="fb5-about">
                </section>
                <!-- END ABOUT -->

                <!-- BEGIN LINKS -->
                <section id="links">

                </section>
                <!-- END LINKS -->

                <!-- BEGIN PAGES -->
                <div id="fb5-book">
                    @for ($i = 1; $i <= 37; $i++)
                        @include('pages.' . $i, ['page' => $i])
                    @endfor
                </div>
                <!-- END PAGES -->

            </div>
            <!-- END CONTAINER BOOK -->

            <!-- BEGIN FOOTER -->
            <div id="fb5-footer">

                <div class="fb5-bcg-tools"></div>

                <a id="fb5-logo" target="_blank" href="http://codecanyon.net/user/flashmaniac?ref=flashmaniac">
                    <img alt="" src="img/logo.png">

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

                            <!-- thumb 1 -->
                            <li class="1">
                                <img alt="" data-src="pages/1_.jpg">

                            </li>

                            <!-- thumb 2 -->
                            <li class="2">
                                <img alt="" data-src="pages/2_.jpg">
                            </li>

                            <!-- thumb 3 -->
                            <li class="3">
                                <!-- img -->
                                <img alt="" data-src="pages/3_.jpg">

                            </li>

                            <!-- thumb 4 -->
                            <li class="4">
                                <!-- img -->
                                <img alt="" data-src="pages/4_.jpg">

                            </li>

                            <!-- thumb 5 -->
                            <li class="5">
                                <!-- img -->
                                <img alt="" data-src="pages/5_.jpg">

                            </li>

                            <!-- thumb 6 and 7 -->
                            <li class="6">
                                <!-- img -->
                                <img alt="" data-src="pages/6_7_.jpg">

                            </li>

                            <!-- thumb 8 and 9 -->
                            <li class="8">
                                <!-- img -->
                                <img alt="" data-src="pages/8_9_.jpg">

                            </li>

                            <!-- thumb 10 -->
                            <li class="10">
                                <!-- img -->
                                <img alt="" data-src="pages/10_.jpg">

                            </li>

                            <!-- thumb 11 -->
                            <li class="11">
                                <!-- img -->
                                <img alt="" data-src="pages/11_.jpg">

                            </li>

                            <!-- thumb 12 -->
                            <li class="12">
                                <!-- img -->
                                <img alt="" data-src="pages/12_.jpg">

                            </li>

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
