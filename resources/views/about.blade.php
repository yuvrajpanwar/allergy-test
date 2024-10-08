<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get rid of Allergy problems. Take a Comprehensive Allergy Test today.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="icon" href="{{ asset('public/images/whatsapp/tabfavicon.png') }}" type="image/x-icon">
    <style>
        /* Initial grey state */
        .disabled-btn {
            background-color: grey;
            cursor: not-allowed;
        }

        /* Active blue state after reCAPTCHA success */
        .active-btn {
            background-color: #32bdd2;
            cursor: pointer;
        }

        .fixed-icons11 {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }

        .icon11 {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .icon-image11 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .icon11:hover .icon-image11 {
            transform: scale(1.1);
        }

        /* Modal Styling */
        /* Modal Styling */
        /* Modal Styling */
        /* Modal Styles */
        .modal11 {
            display: none;
            position: fixed;
            z-index: 9999;
            /* Ensure the modal is on top of all elements */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content11 {
            background-color: #fefefe;
            /* margin: 15% auto; */
            margin-top: 0.5%;
            margin-bottom: 0.5%;
            margin-left: auto;
            margin-right: auto;
            /* Adjust the modal positioning */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            /* Max width to ensure it doesn't stretch too much */
            border-radius: 10px;
            /* Rounded corners */
            position: relative;
            z-index: 10000;
            /* Ensure content is on top of overlay */
        }

        .close11 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close11:hover,
        .close11:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Ensure reCAPTCHA is visible and clickable */
        .g-recaptcha {
            margin: 0 auto;
            max-width: 100%;
            width: 100%;
            transform: scale(0.76);
            /* Adjust scaling for better fit */
            transform-origin: 0 0;
            /* Adjust scaling origin */
            overflow: hidden;
            /* Hide any overflow */
            z-index: 10000;
            /* Ensure it's on top */
        }


        /* Form Styles */
        form label {
            display: block;
            margin-top: 10px;
        }

        form input,
        form textarea,
        form select {
            width: calc(100% - 20px);
            margin-top: 5px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        form button {
            margin-top: 10px;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }








        /* Default styles for all screens */
        .quick-info-item {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center items by default */
        }

        /* Media Query for Large Screens */
        @media (min-width: 992px) {

            /* Adjust breakpoint as needed */
            .quick-info-item.book-appointment {
                justify-content: flex-end;
                /* Align items to the right */
            }
        }

        /* For larger displays */
        .quick-info-item {
            text-align: center;
            justify-content: center;
        }

        /* For smaller displays */
        @media (max-width: 768px) {
            .quick-info-item {
                text-align: left;
                justify-content: flex-start;
            }

            .quick-info-2 {
                justify-content: flex-start;
                /* Align content to the left */
            }

            .quick-info-link {
                flex-direction: row;
                /* Keep icon and text in the same row */
                justify-content: flex-start;
                /* Align the link content to the left */
            }

            .icon {
                margin-right: 10px;
                /* Space between icon and text */
            }
        }

        .footer-section {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            /* Default for large screens */
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
        }

        .footer-item {
            flex: 1 1 30%;
            /* Each item takes up 30% of the width on larger screens */
            margin-bottom: 20px;
        }

        /* Media query for smaller screens */
        @media (max-width: 767px) {
            .footer-section {
                flex-direction: column;
                /* Stack items vertically */
                align-items: stretch;
                /* Full-width alignment */
            }

            .footer-item {
                flex: 1 1 100%;
                /* Each item takes up the full width */
                text-align: left;
                /* Align text to the left */
            }
        }

        /* Additional styling to align "Follow Us" section to the right */
        @media (min-width: 992px) {
            .footer-item.follow-us {
                justify-content: flex-end;
                /* Align the "Follow Us" section to the right */
                text-align: right;
                /* Align content to the right */
            }
        }

        /* For larger displays */
        .quick-info-item {
            text-align: center;
            justify-content: center;
        }

        /* For smaller displays */
        @media (max-width: 768px) {
            .quick-info-item {
                text-align: left;
                justify-content: flex-start;
            }

            .quick-info-2 {
                justify-content: flex-start;
                /* Align content to the left */
            }

            .quick-info-link {
                flex-direction: row;
                /* Keep icon and text in the same row */
                justify-content: flex-start;
                /* Align the link content to the left */
            }

            .icon {
                margin-right: 10px;
                /* Space between icon and text */
            }
        }

        .error {
            color: red;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Francois One', Arial;
        }

        .site-navbar {
            position: sticky;
            top: 0px;
            background: rgb(235, 230, 230);

        }

        @media only screen and (max-width: 479px) {
            .main-title {
                font-size: 30.0pt;
            }
        }

        .site-menu>li>a {
            color: black !important;
        }

        .site-footer a {
            color: #F8F8F8 !important;
        }

        .off-white {
            color: #F8F8F8 !important;
        }

        .site-navbar .site-navigation .site-menu>li>a>span:hover {
            color: red !important;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11084201160"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11084201160');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PRZHMTSD');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1121899502057242');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1121899502057242&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>

    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <!-- Icons Section -->
    <div class="fixed-icons11">
        <a href="https://wa.me/7358728170" target="_blank" class="icon11 whatsapp11" title="Chat on WhatsApp">
            <img src="{{ asset('public/images/whatsapp/frame376.png') }}" alt="WhatsApp" class="icon-image11">
        </a>
        <div class="icon11 contact11" title="Contact Us" onclick="openContactForm11()">
            <img src="{{ asset('public/images/whatsapp/frame375.png') }}" alt="Contact Us" class="icon-image11">
        </div>
    </div>
    <!-- Contact Form Modal -->
    <div id="contactFormModal11" class="modal11" onclick="closeContactForm11(event)">
        <div class="modal-content11" onclick="event.stopPropagation()">
            <span class="close11" onclick="closeContactForm11(event)">&times;</span>
            <h2>Contact Us</h2>
            <form id="messageForm11" action="{{ route('send-contact-form') }}" name="messageForm11" method="POST">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="name">Name</label>
                        <input type="text" id="name11" name="name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="text-black" for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number11" name="phone_number"  minlength="10" maxlength="15"class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="email">Email</label>
                        <input type="email" id="email11" name="email" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="location">Choose Collection Point</label>
                        <select name="location" id="location11" class="form-control">
                            <option class="text-center" value="" selected="" disabled="">---- Choose
                                Collection Point ----
                            </option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Bengaluru">Bengaluru</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Pune">Pune</option>
                            <option value="Kochi">Kochi</option>
                            <option value="Thiruvanathapuram">Thiruvanathapuram</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="message" id="message11" cols="30" rows="7" class="form-control"
                            placeholder="Write your message or questions here..."></textarea>
                    </div>
                </div>

                <!-- Add reCAPTCHA -->
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY"
                        data-callback="enableSubmitBtn"></div>
                    <span class="help-block" id="recaptcha-error11" style="display: none;">
                        <strong class="error">Please verify that you are not a robot.</strong>
                    </span>
                </div>

                <!-- Submit button -->
                <div class="row form-group mt-2">
                    <div class="col-md-12">
                        <input disabled id="submitBtn11" type="submit" value="Submit"
                            class="btn btn-pill btn-md text-white disabled-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Include reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>




    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    </div>
    <header class="site-navbar bg-light" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-4">
                    <h1 class="mb-0 site-logo">
                        <a href="{{ route('home') }}" class="text-white mb-0">
                            <img style="    max-height: 65px;
                            margin: 10px 0 10px 0;"
                                src="{{ asset('public/images/whatsapp/mainlogo.png') }}" alt=""></a>
                    </h1>
                </div>
                <div class="col-12 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{ route('home') }}"><span>Home</span></a></li>
                            <li><a href="{{ route('food-intolerance') }}"><span>Food Intolerance</span></a></li>
                            <li class="active"><a href="{{ route('about') }}"><span>About</span></a></li>
                            <li><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3 text-black"></span></a></div>

            </div>

        </div>


    </header>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('public/images/whatsapp/about1.jpeg') }}" alt="Image"
                        class="img-fluid rounded mb-3">
                </div>
                <div class="col-md-7 ml-auto">
                    <h2 class=" text-primary mb-3"
                        style="    color: #ff0000;
                                            font-family: 'Francois One', Arial;
                                            font-weight: 700;
                                            vertical-align: baseline;        
                                            font-size: 51.0pt;">
                        About Us
                    </h2>
                    <p class="lead">Empower Yourself with Knowledge,Say Goodbye to Allergy Symptoms </p>
                    <p class="mb-4">At Proact Healthcare, we are dedicated to revolutionizing the way you approach
                        allergy testing and healthcare. Our mission is simple: to empower individuals like you to take
                        control of your health and live your best life, free from the limitations of allergies and
                        intolerances.
                        <br>

                        Founded by a team of experienced healthcare professionals, we understand the frustration and
                        challenges that come with managing allergies and food intolerances. That's why we've made it our
                        priority to provide comprehensive, accurate, and personalized allergy testing services tailored
                        to your unique needs.


                    </p>

                    <p>With state-of-the-art testing technology and a commitment to excellence, we deliver results you
                        can trust. But we're more than just a testing facility – we're your partners on the journey to
                        better health. Our team of experts is here to guide you every step of the way, offering support,
                        guidance, and personalized recommendations to help you manage your allergies effectively.
                        <br>
                        At Proact Healthcare, we believe that knowledge is power. By identifying your specific allergens
                        and intolerances, we empower you to make informed decisions about your health and lifestyle. Say
                        goodbye to guesswork and hello to clarity – with Proact Healthcare, you can finally take control
                        of your allergies and live your life to the fullest.

                    </p>
                    <p class="mb-4">Discover the difference that personalized allergy testing can make. </p>


                </div>
            </div>
            <p class="lead text-center" style="font-weight: 600;font-size:1.2rem">Contact us today to learn more about
                our services and start your journey to better health
                with Proact Healthcare.</p>
        </div>
    </div>


    <div class="block-quick-info-2" style="position: relative; padding: 20px 0;">
        <!-- Background image -->
        <div
            style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset(`/`) }}/public/images/whatsapp/Rectangle71.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        z-index: -1;
    ">
        </div>

        <!-- White overlay -->
        <div
            style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.65); /* Semi-transparent white */
        z-index: -1;
    ">
        </div>

        <div class="container" style="position: relative; z-index: 1;">
            <div>
                <div class="row">
                    <!-- WhatsApp Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0 quick-info-item">
                        <a class="align-items-center d-flex quick-info-link" href="https://wa.me/7358728170"
                            target="_blank" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-whatsapp mr-3"
                                    style="width: 48px;height: 48px;color: #016426;"></span>
                                <p class="lead m-0"
                                    style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">
                                    Reach us on WhatsApp</p>
                            </div>
                        </a>
                    </div>

                    <!-- Call Us Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0 quick-info-item">
                        <a href="tel:9746222668" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-phone mr-3" style="width: 46.68px;height: 46.69px;"></span>
                                <div class="text">
                                    <p class="lead m-0"
                                        style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">
                                        Call us today</p>
                                    <p class="lead m-0"
                                        style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">
                                        +91 97462 22668</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Book Appointment Link -->
                    <div class="col-sm-12 col-md-4 quick-info-item book-appointment">
                        <a href="{{ route('contact-us') }}" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-home mr-3" style="width: 41.59px;height: 41.59px;"></span>
                                <p class="lead m-0"
                                    style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">
                                    Book an appointment</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer off-white" style="background: #000000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-section">
                        <!-- Quick Links Section -->
                        <div class="footer-item">
                            <h2 class="footer-heading mb-4 off-white">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('food-intolerance') }}">Food Intolerance</a></li>
                            </ul>
                        </div>

                        <!-- Contact Section -->
                        <div class="footer-item">
                            <h2 class="footer-heading mb-4 off-white">Contact</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tel:9746222668">
                                        <p class="lead off-white">+91 97462 22668</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Follow Us Section -->
                        <div class="footer-item follow-us">
                            <div>
                                <h2 class="footer-heading mb-4 off-white">Follow
                                    Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </h2>
                                <a href="https://www.facebook.com/PreventiveCareLab" class="pl-0 pr-3">
                                    <span style="font-size: 2rem;" class="icon-facebook"></span>
                                </a>
                                <a href="https://www.youtube.com/@proacthealthcareindia" class="pl-3 pr-3">
                                    <span style="font-size: 2rem;" class="icon-youtube"></span>
                                </a>
                                <a href="https://www.instagram.com/proacthealthcare1/" class="pl-3 pr-3">
                                    <span style="font-size: 2rem;" class="icon-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5">
                <div class="col-12 text-md-center text-left">
                    <p class="off-white" style="font-size: 0.75rem;">©2018-2024 Proact Healthcare (P) Limited | All
                        rights reserved</p>
                </div>
            </div>
        </div>
    </footer>


    </div>

    <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js') }}"></script> --}}
    <script src="{{ asset('public/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('public/js/aos.js') }}"></script>
    <script src="{{ asset('public/js/rangeslider.min.js') }}"></script>


    <script src="{{ asset('public/js/typed.js') }}"></script>

    {{-- <script>
    var typed = new Typed('.typed-words', {
      strings: ["pain", " stress", " fatigue"],
      typeSpeed: 80,
      backSpeed: 80,
      backDelay: 4000,
      startDelay: 1000,
      loop: true,
      showCursor: true
    });
  </script> --}}

    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Add these in your HTML <head> or before this script
        // Open Contact Form Modal
        // Open Contact Form Modal
        // Initialize reCAPTCHA
        function initializeRecaptcha() {
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.render('recaptcha-container11', {
                    'sitekey': '6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY'
                });
            }
        }

        // Call the initialize function when the document is ready
        $(document).ready(function() {
            initializeRecaptcha();
            $('#messageForm11').validate({
                // Validation rules
                submitHandler: function(form) {
                    if (grecaptcha.getResponse() === '') {
                        document.getElementById('recaptcha-error11').style.display = 'block';
                        return false;
                    } else {
                        form.submit();
                    }
                }
            });
        });

        function openContactForm11() {
            document.getElementById('contactFormModal11').style.display = 'block';
        }

        // Close Contact Form Modal when clicked outside the modal content or on the close button
        function closeContactForm11(event) {
            const modal = document.getElementById('contactFormModal11');
            if (event.target === modal || event.type === 'click') {
                modal.style.display = 'none';
            }
        }

        // Enable submit button if reCAPTCHA is completed
        function enableSubmitBtn() {
            // Enable the submit button
            const submitBtn = document.getElementById('submitBtn11');
            submitBtn.disabled = false;
            submitBtn.classList.remove('disabled-btn');
            submitBtn.classList.add('active-btn');
        }

        // Initialize form validation
        $(document).ready(function() {
            $('#messageForm11').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    phone_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    location: {
                        required: true
                    }
                    //,
                    // message: {
                    //     required: true,
                    //     minlength: 10
                    // }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    phone_number: {
                        required: "Please enter your phone number",
                        digits: "Please enter a valid phone number",
                        minlength: "Your phone number must be at least 10 digits",
                        maxlength: "Your phone number cannot exceed 15 digits"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    location: {
                        required: "Please select a collection point"
                    }
                    //,
                    // message: {
                    //     required: "Please enter your message",
                    //     minlength: "Your message must be at least 10 characters long"
                    // }
                },
                submitHandler: function(form) {
                    if (grecaptcha.getResponse() === '') {
                        document.getElementById('recaptcha-error11').style.display = 'block';
                        return false;
                    } else {
                        form.submit();
                    }
                }
            });

            // Adjust reCAPTCHA size on window resize
            $(window).on('resize', function() {
                grecaptcha.render();
            });
        });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>
