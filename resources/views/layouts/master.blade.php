<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{asset('elyas/style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('elyas/script.js')}}"></script>
    </head>

    <body class="flex flex-col h-screen justify-between">

        @include('partial.header')

        <div class="mb-auto">@yield('content')</div>

        <div class="mb-auto"> @yield('pagination')</div>

        @include('partial.footer')

    </body>
</html>


