<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts._sections.head')
<body class="bg-blue-100 h-screen">
<div id="app">
    @include('layouts._sections.nav')

    <div class="flex items-center mb-8">
        <div class="lg:w-1/2 md:mx-auto">
            <div class="rounded shadow">
                <div class="font-medium text-lg text-blue-700 bg-blue-300 p-3 rounded-t">
                    @yield('panel_title')
                </div>
                <div class="bg-white p-3 rounded-b text-grey-900">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
