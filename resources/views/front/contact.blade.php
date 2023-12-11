@extends('layout.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var refreshButton = document.querySelector('.btn-refresh');
            var captchaImage = document.querySelector('.captcha span img');
    
            refreshButton.addEventListener('click', function() {
                // Generate a new CAPTCHA image URL by adding a timestamp parameter
                var newImageUrl = captchaImage.src + '?' + Date.now();
                
                // Update the image source
                captchaImage.src = newImageUrl;
            });
        });
    </script>

    <body>
        <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1>Pacific Contructor & Enterprises<span>.</span></h1>
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('project') }}">Projects</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Dropdown 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Deep Dropdown 1</a></li>
                      <li><a href="#">Deep Dropdown 2</a></li>
                      <li><a href="#">Deep Dropdown 3</a></li>
                      <li><a href="#">Deep Dropdown 4</a></li>
                      <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dropdown 2</a></li>
                  <li><a href="#">Dropdown 3</a></li>
                  <li><a href="#">Dropdown 4</a></li>
                </ul>
              </li> --}}
                        <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
                    </ul>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center"
                style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                    <h2>Contact</h2>
                    {{-- <ol>
              <li><a href="index.html">Home</a></li>
              <li>Contact</li>
            </ol> --}}

                </div>
            </div><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-map"></i>
                                <h3>Our Address</h3>
                                <p>44/270 Meston Road, Near Bata Showroom, Kanpur Nagar, UP - 208001, INDIA</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>akhtarnawazkhan56@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 9369249499</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="row gy-4 mt-1">

                        <div class="col-lg-6 ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.624934666005!2d80.34541067435815!3d26.467816279070238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c475f3ee2cd6f%3A0x45ddb6113f1d2235!2sBata%20Store!5e0!3m2!1sen!2sin!4v1691580376967!5m2!1sen!2sin"
                                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- End Google Maps -->

                        <div class="col-lg-6" style="boader:1px solid yellow;">
                            <form action="{{ route('contact.store') }}" method="post">
                              @csrf
                                <div class="row gy-4">
                                    <div style="text-align:center;">
                                        <h3 class="text-danger">Contact Me !!</h3>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                      <span><b>Name :</b></span>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                                    <div class="col-lg-6 form-group">
                                      <span><b>E-mail :</b></span>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                  <span><b>Subject :</b></span>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <br>
                                <div class="form-group">
                                  <span><b>Message :</b></span>
                                    <textarea class="form-control" name="message" value="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                {{-- <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div> --}}
                                <br>
                                {{-- <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label"><b>Captcha</b></label>
               --}}
              
                                    {{-- <div class="col-md-6 mt-2">
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                                        
                                       
                                        <input id="captcha" type="text" class="form-control mt-2" placeholder="Enter Captcha" name="captcha">
              
                                    
                                        @if ($errors->has('captcha'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('captcha') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> --}}
              
              
              
                                <div class="text-center mt-2"><button type="submit" class="btn btn-warning">Send Message</button><button onkeydown="document.getElementById('from').value=null;document.getElementById('selectform').reset;" class="btn btn-primary " style="margin-left: 8px ;" type="reset">Reset</button></div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content position-relative">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Pacific Contructor & Enterprises</h3>
                                <p>
                                    44/270 Meston Road <br>
                                    Kanpur Nagar U.P- 208001 , INDIA<br>
                                    <strong>Phone:</strong> +91 9369249499<br>
                                    <strong>Email:</strong> akhtarnawazkhan56@gmail.com<br>
                                </p>
                                <div class="social-links d-flex mt-3">
                                    <a href="https://twitter.com/AkhtarNawa77571"
                                        class="d-flex align-items-center justify-content-center" target="_blank"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="https://www.facebook.com/akhtarnawaz.khan.9"
                                        class="d-flex align-items-center justify-content-center " target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/akhter8841/"
                                        class="d-flex align-items-center justify-content-center" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/akhter-nawaz-908912241/"
                                        class="d-flex align-items-center justify-content-center" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div><!-- End footer info column-->

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div><!-- End footer links column-->

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Product Management</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Graphic Design</a></li>
                            </ul>
                        </div><!-- End footer links column-->

                        {{-- <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                  <li><a href="#">Molestiae accusamus iure</a></li>
                  <li><a href="#">Excepturi dignissimos</a></li>
                  <li><a href="#">Suscipit distinctio</a></li>
                  <li><a href="#">Dilecta</a></li>
                  <li><a href="#">Sit quas consectetur</a></li>
                </ul>
              </div><!-- End footer links column-->
    
              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                  <li><a href="#">Ipsam</a></li>
                  <li><a href="#">Laudantium dolorum</a></li>
                  <li><a href="#">Dinera</a></li>
                  <li><a href="#">Trodelas</a></li>
                  <li><a href="#">Flexo</a></li>
                </ul>
              </div><!-- End footer links column--> --}}

                    </div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Pacific Contructor & Enterprises</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                        Designed by <a href="">Akhter Nawaz</a>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

    </body>

    </html>
@endsection
