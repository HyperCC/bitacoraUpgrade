<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Bitacora UCN - @yield('title_head')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

<div class="d-flex flex-column h-screen justify-content-between" id="app">

    <header>
        @include('helpers.nav')
    </header>

    <main class="py-4">
        @yield('content_body')
    </main>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>

</div>

</body>
</html>
