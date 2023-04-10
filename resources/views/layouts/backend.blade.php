<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Plan My Event') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite('resources/sass/app.scss') --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">

        @yield('auth_content')

        @if (getCurrentUrl() == 'login' || getCurrentUrl() == 'register' || getCurrentUrl() == 'password/reset')
        @else
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img style="width: 100px;
                          hight:60px; 
                          margin-left: 50px;"src="photo/pme.jpg"
                        class="d-inline-block align-top" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profit-events">Events</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/contact">Contact Us</a>
                        </li>
                        @if (auth()->check())
                            <li class="nav-item">
                                <a class="nav-link " href="#"
                                    onclick="document.getElementById('logout').submit();">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>

        @endif
        <main class="py-4">
            @yield('content')
        </main>

        <form action="{{ route('logout') }}" method="POST" id="logout">
            @csrf
        </form>

    </div>
    {{-- @vite('resources/js/app.js') --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
