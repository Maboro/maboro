<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('site.title') }} - @yield('pageName')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        @yield('navbar')
        <div class="container">
            @yield('content')
        </div>




    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
