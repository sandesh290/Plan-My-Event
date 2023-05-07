@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="aboutus.css">
    <main class="py-">
        @yield('content')
    </main>
    </div>
    <section style="box-shadow: 0px 5px 9px #adb5bd inset" class="about-us">
        <div class="about">
            <div class="col-md-7">
                <img style="width: 500px;
                height: 450px;
                background: url(image.png);
                border-radius: 20px;"
                    src="photo/event.jpg " class="pic">
            </div>
            <div style="margin-top: 5px;" class="col-md-5">
                <div style=" text-align: justify; " class="text">
                    <h4 style="color:#FF7800; font-family: 'Nunito', sans-serif;" class="fcf-h4">About Us</h4>
                    <h3 class="fcf-h3" style="color: black; font-family: 'Nunito', sans-serif;">Plan My Event</h3>
                    <p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Expedita natus ad sed harum itaque ullam
                        enim
                        quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero
                        atque
                        amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate
                        consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
                    <div class="data">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 style="text-align:center; color: rgb(4, 0, 0);">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="photo/pme.png" alt="Jane" style="width: 50%; margin-left: 100px;">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>

                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="photo/pme.png" alt="Mike" style="width: 50%; margin-left: 100px;">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>

                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="photo/pme.png" alt="John" style="width: 50%; margin-left: 100px;">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>

                </div>
            </div>
        </div>
    </div>

    <style>
        .row {
            display: flex;
            justify-content: center;
        }

        .column {
            flex: 33.33%;
            padding: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .card img {
            border-radius: 5px 5px 0 0;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
        }

        .button {
            background-color: #FF7800;
            color: #fff;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>

    </div>
@endsection
