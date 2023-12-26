<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{asset('elyas/style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('elyas/script.js')}}"></script>

    </head>

    <body class="antialiased bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400">
        <header>
            @include('partial.header')
        </header>
        <main>
            <div class="mb-auto"> @yield('sortby')</div>
            <div class="mb-auto">@yield('content')</div>
            <div class="mb-auto"> @yield('pagination')</div>
        </main>
        <footer>
            @include('partial.footer')
        </footer>
    </body>

</html>


