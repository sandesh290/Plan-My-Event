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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Scripts -->
    {{-- @vite('resources/sass/app.scss') --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('aboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('contact.css') }}">

    <style>
        .navbar-nav li {
            margin-left: 10px;
            margin-right: 10px;

        }

        .dropdown {

            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        <style>.contact-info {
            display: inline-block;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
        }

        .contact-info-icon {
            margin-bottom: 15px;
        }

        .contact-info-item {
            background: #0E76BC;
            padding: 30px 0px;
        }

        .contact-page-sec .contact-page-form h2 {
            color: #0E76BC;
            text-transform: capitalize;
            font-size: 22px;
            font-weight: 700;
        }

        .contact-info-icon i {
            font-size: 48px;
            color: #FF7800;
        }

        .contact-info-text p {

            margin-bottom: 0px;
        }

        .contact-info-text h2 {
            color: #fff;
            font-size: 22px;
            text-transform: capitalize;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-info-text span {
            color: #ffffff;
            font-size: 17px;

            display: inline-block;
            width: 100%;
        }
    </style>
    @yield('css')
</head>

<body style="background-color: #F3F9FA">

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light "
                        style="background-color: #F3F9FA; font-size: 19px;">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('photo/pme.png') }}" alt="Logo" width="100">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav" style="margin: 0 auto;">
                                <li class="nav-item active">
                                    <a style="color:black"
                                        onMouseOver="this.style.color='#FF7800'"onMouseClick="this.style.color='#FF7800'"
                                        class="nav-link" href="{{ url('/') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a style="color:black"
                                        onMouseOver="this.style.color='#FF7800'"onMouseClick="this.style.color='black'"
                                        class="nav-link" href="{{ url('event-card') }}">Event</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:black"
                                        onMouseOver="this.style.color='#FF7800'"onMouseClick="this.style.color='#FF7800'"
                                        class="nav-link" href="{{ url('aboutus') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:black"
                                        onMouseOver="this.style.color='#FF7800'"onMouseClick="this.style.color='#FF7800'"
                                        class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                            @if (auth()->check())
                                <div class="dropdown">
                                    <span>
                                        <img src="https://icon-library.com/images/default-user-icon/default-user-icon-13.jpg"
                                            alt="Default Img" width="30">
                                        <span>{{ auth()->user()->name }}</span>
                                    </span>
                                    <div class="dropdown-content">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button style="background-color: #FF7800;"
                                                class="btn btn-danger btn-sm">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a style="background-color: #FF7800;  border: transparent;" href="{{ url('/login') }}"
                                    class="btn btn-success">Login</a>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <form action="{{ route('logout') }}" method="POST" id="logout">
        @csrf
    </form>
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
