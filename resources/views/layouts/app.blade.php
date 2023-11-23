<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <!-- nice select  -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
          integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
          crossorigin="anonymous"/>

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>

    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
</head>
<body class="{{ !\Illuminate\Support\Facades\Route::is('home') ? 'sub_page' : '' }}">
<div id="app">
    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
    {{--        <div class="container">--}}
    {{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--                {{ config('app.name', 'Laravel') }}--}}
    {{--            </a>--}}
    {{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
    {{--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
    {{--                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <!-- Left Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav me-auto">--}}

    {{--                </ul>--}}

    {{--                <!-- Right Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav ms-auto">--}}
    {{--                    <!-- Authentication Links -->--}}
    {{--                    @guest--}}
    {{--                        @if (Route::has('login'))--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

    {{--                        @if (Route::has('register'))--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}
    {{--                    @else--}}
    {{--                        <li class="nav-item dropdown">--}}
    {{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
    {{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--                                {{ Auth::user()->name }}--}}
    {{--                            </a>--}}

    {{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
    {{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                                   onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                    {{ __('Logout') }}--}}
    {{--                                </a>--}}

    {{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
    {{--                                    @csrf--}}
    {{--                                </form>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                    @endguest--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}

    {{--    <main class="py-4">--}}
    {{--    </main>--}}
    <x-header/>
    @yield('content')
    <x-footer/>
</div>


<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
</body>
</html>
