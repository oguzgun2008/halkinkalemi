<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield('description')" />
    <link rel="shortcut icon" sizes="196x196" href="{{asset('assets')}}/assets/images/logo.png">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets')}}/libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="{{asset('assets')}}/libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/bower/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/core.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/app.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="{{asset('assets')}}/libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
    <script>
        Breakpoints();
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/libs/bower/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/libs/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/libs/bower/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/libs/bower/switchery/dist/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/libs/bower/lightbox2/dist/css/lightbox.min.css">

@yield('css')
    @yield('javascript')
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->
@include('admin._header')
@include('admin._sidebar')
@include('admin._searchbar')
<main id="app-main" class="app-main">
    <div class="wrap">
        @section('content')
            içerik buraya gelecek
        @show
    </div><!-- .wrap -->
    @include('admin._footer')
</main>
<!--========== END app main -->
@include('admin._appcustomizer')
@include('admin._rightsidebar')
@include('admin._js')
@yield('script')
</body>
</html>

