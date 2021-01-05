<nav class="bg-white h-12 shadow mb-8 px-6 md:px-0">
    <div class="container mx-auto h-full">
        <div class="flex items-center justify-center h-12">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="no-underline text-blue-700">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1 text-right menu-items">
                <a class="no-underline hover:underline text-grey-800 mr-3 text-sm" href="{{ url('/') }}">Home</a>
                <a class="no-underline hover:underline text-grey-800 mr-3 text-sm" href="{{ url('/about') }}">About</a>
                <a class="no-underline hover:underline text-grey-800 mr-3 text-sm" href="{{ url('/portfolio') }}">Portfolio</a>
                <a class="no-underline hover:underline text-grey-800 mr-3 text-sm" href="{{ url('/contact') }}">Contact</a>
                <span class="border-grey-800 mr-3 border-l-2"><wa/span>
                @guest
                    <a class="no-underline hover:underline text-grey-800 mr-3 text-sm" href="{{ url('/login') }}">Login</a>
                    <a class="no-underline hover:underline text-grey-800 text-sm" href="{{ url('/register') }}">Register</a>
                @else
                    <div class="inline-flex">
                        <span class="text-grey-800 text-sm mr-4">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline text-grey-800 text-sm"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>

                @endguest
            </div>
        </div>
    </div>
</nav>