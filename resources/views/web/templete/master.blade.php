<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>

        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta charset="utf-8 ">

        <title>Pavaki Akademy</title>

        <link rel="icon" type="image/png" href="{{asset('web/img/favicon.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">

    </head>

    <body class="home-v5">
        <section>
            {{-- HEADER --}}
            @include('web.include.header')

            {{-- CONTENT --}}
            @yield('content')

            {{-- FOOTER --}}
            @include('web.include.footer')

            @yield('script')
        </section>    
    </body>
</html>
       

        

  