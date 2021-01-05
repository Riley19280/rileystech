<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts._sections.head')
<body class="bg-blue-100 h-screen">
    <div id="app">
        @include('layouts._sections.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
