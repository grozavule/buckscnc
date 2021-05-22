<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
        <script src="https://kit.fontawesome.com/3207795e71.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @yield('content')
        @section('js')
        <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/common.js') }}"></script>
        @show
    </body>
</html>
