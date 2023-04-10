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
                <img src="photo/pme.png " alt="Jane" style="width:50%; margin-left: 100px;">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="photo/pme.png" alt="Mike" style="width:50%; margin-left: 100px; ">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="photo/pme.png" alt="John" style="width:50%; margin-left: 100px;">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
