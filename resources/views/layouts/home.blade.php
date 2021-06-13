<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets')}}/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme-shop.css">



    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/demos/demo-law-firm-2.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('assets')}}/css/skins/skin-law-firm-2.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{asset('assets')}}/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>
<div class="body">
    @include('home._header')
    <div role="main" class="main">
        @include('home._slider')
        @include('home._altslider')
        @section('content')
            içerik alanı
        @show


    </div>
    @include('home._footer')

</div>
@include('home._js')
</body>
</html>
