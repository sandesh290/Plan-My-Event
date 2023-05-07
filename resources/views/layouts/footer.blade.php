@if (!request()->is('table-ordering/*'))
    {{-- <footer style="background-color: #0E76BC">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <span style="font-size: 20px; color: white;">Plan My Event- 2022</span>
                </div>
                <div style="font-size: 20px" class="col-md-9 social-media-box">
                    <div class="text-right">
                        <a href="">
                            <i class="fab fa-facebook" style="color: #fff;"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram"style="color: #fff;"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-twitter"style="color: #fff;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3" style="background-color: #0E76BC">

        <!-- Footer Elements -->
        <div class="container">
            <!-- Grid row-->
            <div class="row justify-content-center">
                <!-- Grid column -->
                <div class="col-md-8 py-5">
                    <div class="mb-2 d-flex justify-content-center">
                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i href="https://www.facebook.com/?ref=tn_tnmn"
                                class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"></i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"></i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"></i>
                        </a>
                        <!-- Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"></i>
                        </a>
                        <!-- Instagram -->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:white"></i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="color:white">
            © 2020 Plan My Event
        </div>
        <!-- Copyright -->
    </footer>

    <style>
        .justify-content-center {
            justify-content: center;
        }

        .d-flex {
            display: flex;
        }
    </style>

    <!-- Footer -->
@endif
