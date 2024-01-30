@php
    $navItems = [
        'home' => 'Home',
        'product' => 'Product',
        'article' => 'Article',
        'contact-us' => 'Contact Us',
        'login' => 'Log In',
    ];

@endphp

<nav class="navbar ">
    <div class="flex container justify-between">
        <a href="" class="" id="logo">
            <img src="{{ asset('assets/img/icon/logo-dark.png') }}" class="h-[75px] object-cover"></a>

        <button class="lg:hidden" onclick="toggleMenu()" id="toggleMenu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d=" M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div class=" flex lg:justify-between gap-7 text-18 flex-col lg:flex-row lg:gap-8 xl:gap-12 lg:items-center absolute right-0 translate-x-full top-0 px-7 py-5 h-screen lg:static bg-white text-black lg:text-inherit lg:bg-transparent lg:h-auto lg:px-0 lg:py-0 lg:translate-x-0 transition-transform duration-500 ease-in-out pr-14"
            id="nav">

            <button data-collapse-toggle="navbar-default" class="lg:hidden absolute top-5 right-5"
                onclick="toggleMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- @foreach ($navItems as $route => $name)
                @if ($route == 'login' && auth()->check())
                    <span class="flex flex-grow">{{ auth()->user()->name }} </span>
                    <form method="POST" action="{{ route('logout') }}" class="inline-block">
                        @csrf
                        <button type="submit" class=""><svg viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="#1C274C"
                                        stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </form>
                @else
                    <a href="{{ route($route) }}"
                        class="{{ request()->routeIs($route) ? 'rounded-lg bg-primary px-4 py-2 text-16 text-white' : '' }} hover:text-secondary transition-colors duration-300"
                        title="{{ $name }}">{{ $name }}</a>
                @endif
            @endforeach --}}
            @foreach ($navItems as $route => $name)
                @if ($route == 'login' && auth()->check())
                    <span class="flex flex-grow">{{ auth()->user()->name }} </span>
                    <a href="{{ route('logout') }}" class="">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="#1C274C"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                @elseif ($route == 'login' && !auth()->check())
                    <a href="{{ route($route) }}"
                        class="{{ request()->routeIs($route) ? 'rounded-lg bg-primary px-4 py-2 text-16 text-white' : '' }} hover:text-secondary transition-colors duration-300"
                        title="{{ $name }}">{{ $name }}</a>
                @else
                    <a href="{{ route($route) }}"
                        class="{{ request()->routeIs($route) ? 'rounded-lg bg-primary px-4 py-2 text-16 text-white' : '' }} hover:text-secondary transition-colors duration-300"
                        title="{{ $name }}">{{ $name }}</a>
                @endif
            @endforeach

        </div>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav');
            menu.classList.toggle('translate-x-full');
        }
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            const logo = document.getElementById('logo');
            const navHeight = nav.offsetHeight;
            const scrollHeight = window.pageYOffset;
            if (scrollHeight > navHeight) {
                nav.classList.add('navbar-home-scroll');

            } else {
                nav.classList.remove('navbar-home-scroll');
            }
        })
    </script>
</nav>
