@extends('layouts.app')
@section('css')
    <style>
        .slider-image {
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid #fff;
        }
    </style>
@endsection

@section('content')
    <section id="slider" class="pb-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ $slider->getFirstMediaUrl() }}" alt="{{ $slider->event_name }}"
                            height="600">
                        <div class="carousel-caption d-none d-md-block slider-image">
                            <h5 style="font-weight: 600; font-size: 30px;">{{ $slider->event_name }}</h5>
                            <a style="background-color: #FF7800;" class="btn btn-primary"
                                href="{{ $slider->details() }}">View More</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <style>
        #slider {
            margin: 10px;
        }

        .carousel-inner {
            border-radius: 10px;
            overflow: hidden;
        }

        .carousel-item img {
            object-fit: cover;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 5px;
            bottom: 20px;
            left: 20px;
            right: 20px;
        }

        .carousel-caption h5 {
            color: #fff;
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .carousel-caption a.btn-primary {
            background-color: #FF7800;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>

    <hr>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Upcomming Events </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            @foreach (collect($sliders)->chunk(3) as $key => $row)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($row as $event)
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="{{ $event->getFirstMediaUrl() }}" style="height: 250px;">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{ $event->event_name }}</h4>
                                                        @if (isset($event->ticket_price))
                                                            <a style="background-color: #FF7800;  border: transparent;"
                                                                href="{{ $event->details() }}" class="btn btn-success">Buy
                                                                Tickets</a>
                                                        @else
                                                            <a style="background-color: #FF7800;  border: transparent;"
                                                                href="{{ $event->details() }}"
                                                                class="btn btn-success">Register</a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="about-us">
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
                    <p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Expedita natus ad sed harum itaque ullam
                        enim
                        quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum
                        vero
                        atque
                        amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque
                        voluptate
                        consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
                    <div class="data">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <section class="contact">
        <div class="container">
            <div class="row about d-flex align-items-center">
                <div class="col-md-7">
                    <img src="photo/contact.png " class="pic">
                </div>
                <div class="col-md-5">
                    <div id="fcf-form">
                        <h4 style="color:#FF7800" class="fcf-h2">Contact us</h4>
                        <h3 class="fcf-h3">Write a message</h3>
                        <form id="fcf-form-id" class="fcf-form-class" method="post" action="{{ route('contactus') }}"
                            method="POST">

                            <div class="fcf-form-group">
                                <label for="Name" class="fcf-label">Your name</label>
                                <div class="fcf-input-group">
                                    <input type="text" id="Name" name="Name" class="fcf-form-control"
                                        required>
                                </div>
                            </div>

                            <div class="fcf-form-group">
                                <label for="Email" class="fcf-label">Your email address</label>
                                <div class="fcf-input-group">
                                    <input type="email" id="Email" name="Email" class="fcf-form-control"
                                        required>
                                </div>
                            </div>

                            <div class="fcf-form-group">
                                <label for="Message" class="fcf-label">Your message</label>
                                <div class="fcf-input-group">
                                    <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                                </div>
                            </div>

                            <div class="fcf-form-group">
                                <button style="background-color: #FF7800" type="submit" id="fcf-button"
                                    class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div style="text-align: center; padding: 10px;" class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marked"></i>
                        </div>
                        <div style="color: #FF7800;" class="contact-info-text">
                            <h2>Address</h2>
                            <span>Shivalaya Chowk 33700</span>
                            <span>Pokhara, Nepal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h2>E-mail</h2>
                            <span>info@LoremIpsum.com</span>
                            <span>yourmail@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-info-text">
                            <h2>Office time</h2>
                            <span>Mon - Thu 9:00 am - 4.00 pm</span>
                            <span>Thu - Mon 10.00 pm - 5.00 pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .contact-info-item {
                background-color: #0E76BC;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .contact-info-icon {
                font-size: 30px;
                margin-bottom: 10px;
            }

            .contact-info-text h2 {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .contact-info-text span {
                font-size: 14px;
            }
        </style>

    </section>
@endsection
