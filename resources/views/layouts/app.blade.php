<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel |  @yield('title')</title>

    <!-- app style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="container">

        <div class="content">

            {{-- (blade komentaras) CIA BUS TURINYS --}}

            @yield('content')



        </div>

    </div>

</div>
@include('partials.footer')
</body>
</html>
