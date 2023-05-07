@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="contact.css">
    <style>
        .contact-info {
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
    <section style="box-shadow: 0px 5px 9px #adb5bd inset" class="contact py-5">
        @if ($message = Session::get('success'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="color: green;">{{ $message }}</h3>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row about d-flex align-items-center">
                <div class="col-md-7">
                    <img src="photo/contact.png " class="pic">
                </div>
                <div class="col-md-5">
                    <div id="fcf-form">
                        <h4 style="color:#FF7800" class="fcf-h2">Contact us</h4>
                        <h3 class="fcf-h3">Write a message</h3>
                        <form class="fcf-form-class" method="post" action="{{ route('contactus') }}" method="POST">
                            @csrf
                            <div class="fcf-form-group">
                                <label for="Name" class="fcf-label">Your name</label>
                                <div class="fcf-input-group">
                                    <input type="text" id="Name" name="name" class="fcf-form-control" required>
                                </div>
                            </div>

                            <div class="fcf-form-group">
                                <label for="Email" class="fcf-label">Your email address</label>
                                <div class="fcf-input-group">
                                    <input type="email" id="Email" name="email" class="fcf-form-control" required>
                                </div>
                            </div>

                            <div class="fcf-form-group">
                                <label for="Message" class="fcf-label">Your message</label>
                                <div class="fcf-input-group">
                                    <textarea id="Message" name="message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
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
