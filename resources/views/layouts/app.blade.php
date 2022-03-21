<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light m-10">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/dragonheader.png" alt="" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class=" nav-item">
                        <a class="nav-link active nav-button" aria-current="page"
                            href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-button dropdown-toggle" href="{{ route('home.shop') }}"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item button-style text-style"
                                    href="{{ route('products.index') }}">Products</a></li>
                            <li><a class="dropdown-item button-style text-style" href="#">Sale</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link nav-button" href="{{ route('home.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-button" href="{{ route('home.about') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-button dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item"><a class="nav-link dropdown-item button-style text-style"
                                    href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @endif
                            @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link dropdown-item button-style text-style"
                                    href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"><a
                                        class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf</form>
                                </div>
                            </li>
                            @endguest
            </div>

            {{-- search needs to go to the right with the shoppingbasket. Searchform needs to have a magnifier instead of 'searchtext'  --}}

            <li class="nav-item">cart {{-- <shopping-cart ref="shoppingCart"></shopping-cart> --}} </li>
            <ul>
                <li>
                    <div class="input-group rounded mt-4">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </li>
            </ul>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>

    <div>
        <footer>This is our Big-Footer</footer>
    </div>
</body>

</html>