<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>
<div id="preloader" class="loader_show">
    <div class="loader-wrap">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
</div>
<header class="header">
    <div class="top_bar" style="height: 48px; display: flex; align-items: center">
        <div class="container">
            <div class="top_bar_inner">
                <div class="header_info">
                    <div class="schedule">
                        <div class="hide_icon d-md-none" data-text="{{getConstField('phone')}}"> <span><i class="fa fa-phone"></i></span></div>
                        <div class="d-none d-md-block"><a style="color: #6E7A7A" href="tel:{{str_replace(' ', '', getConstField('phone'))}}"><span><i class="fa fa-phone"></i></span> {{getConstField('phone')}}</a></div>
                    </div>
                    <div class="schedule">
                        <div class="hide_icon d-md-none" data-text="{{getConstField('email')}}"> <span><i class="fa fa-envelope"></i></span></div>
                        <div class="d-none d-md-block"><a style="color: #6E7A7A" href="mailto:{{getConstField('email')}}"><span><i class="fa fa-envelope"></i></span> {{getConstField('email')}}</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle_bar">
        <div class="container">
            <div class="middle_bar_inner">
                <div class="logo">
                    <a href="index.html" class="light_mode_logo"><img src="{{asset('image/logo.png')}}" alt="logo"></a>
                    <a href="index.html" class="dark_mode_logo"><img src="images/logo_foot.svg" alt="logo"></a>
                </div>

                <div class="header_right_part">
                    <div class="mainnav">
                        @include('default.nav_item.main', ['name' => 'main'])
                    </div>
                    <button class="ma5menu__toggle" type="button">
                        <i class="ion-android-menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main_wrapper">

@yield('content')

</div>
<footer class="footer">
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom_inner">
                <div class="copyright">
                    <p><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('plugins/menu/ma5-menu.min.js')}}"></script>
<script src="{{asset('plugins/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<script src="{{asset('js/funfacts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
