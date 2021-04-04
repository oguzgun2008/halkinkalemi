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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

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

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/demos/demo-education.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/skins/skin-education.css">

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
        @section('content')
            içerik alanı
        @show


    </div>
    @include('home._footer')

</div>
@include('home._js')
</body>
</html>
