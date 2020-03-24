<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSO Sponser</title>
    <link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('pages/who/styles/grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('pages/who/styles/origin.min.css')}}">
    <link rel="stylesheet" href="{{asset('pages/who/styles/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('pages/who/styles/print.min.css')}}">
    <link rel="stylesheet" href="{{asset('pages/who/styles/custom_en.css')}}">
    @yield('style')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
</head>
<body>
    <div class="sf-main-site main-site main">

        @yield('content')

    </div>

    @yield('script')
    <script>
        $(document).ready(function(){
            $(".slicknav_btn").click(function(){
                $(".slicknav_nav").toggle();
            });
        });
    </script>
</body>
</html>