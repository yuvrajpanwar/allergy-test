<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get rid of Allergy problems. Take a Comprehensive Allergy Test today.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
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
        /* Popup Container */
        .popup-container-22 {
            display: none;
            /* Hidden by default */
            position: absolute;
            /* Adjust the position relative to its parent */
            top: 100%;
            /* Position right below the trigger link */
            left: 0;
            width: 100%;
            height: auto;
            z-index: 1000;
            justify-content: center;
            align-items: flex-start;
            /* Aligns the popup to the starting point of the viewport */
        }

        /* Popup Content */
        .popup-content-22 {
            background-color: white;
            padding: 20px;
            width: 300px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            position: relative;
            z-index: 1001;
            margin-left: auto;
            margin-top: 20px;
        }

        /* Close Button */
        .close-btn-22 {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Input Styling */
        .popup-input-22 {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Submit Button */
        .popup-btn-22 {
            background-color: #016426;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Popup Title */
        .popup-title-22 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .popup-content-22 {
                margin-right: auto;

                width: 90%;
                padding: 15px;
                /* top: 20px; */
                /* left: 20px; */
            }

            .popup-input-22 {}
        }
















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


        .bxtitle {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 8px;
            /* Combine padding rules */
            font-family: 'Francois One', sans-serif;
            /* Add a fallback font */
            font-size: 22px;
            font-weight: 400;
            line-height: 1.5;
            /* More appropriate for readability with a font size of 22px */
            text-align: left;
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
            /* overflow: hidden; */
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

        /* Ensure content is above background */
        .block-quick-info-2 {
            position: relative;
        }

        .background-overlay {
            background-color: rgba(255, 255, 255, 0.85);
            /* Higher value for more white */
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


        /* Default styles for small screens */
        .responsive-img1 {
            width: 100%;
            height: auto;
            max-width: 540px;
            /* Limits the width on larger screens */
            max-height: 262.02px;
            /* Limits the height on larger screens */
            display: block;
            /* Ensures the image behaves correctly inside the container */
            margin: 0 auto;
            /* Center the image if it's smaller than the container width */
        }

        /* Media Query for Large Displays */
        @media (min-width: 1100px) {
            .responsive-img1 {
                width: 540px;
                height: 262.02px;
                /* Remove positioning properties unless absolutely necessary */
                /* top and left properties are generally not needed for images in a responsive layout */
            }
        }


        .responsive-img2 {
            width: 100%;
            height: auto;
            max-width: 387px;
            /* Limits the width on larger screens */
            max-height: 126px;
            /* Limits the height on larger screens */
            display: block;
            /* Ensures the image behaves correctly inside the container */
            margin: 0 auto;
            /* Center the image if it's smaller than the container width */
        }

        /* Media Query for Large Displays */
        @media (min-width: 1200px) {
            .responsive-img2 {
                width: 387px;
                height: 126px;
                /* Adjust these if needed, but usually position is handled by layout */
                /* top: 1533px; */
                /* left: 730px; */
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
                font-size: 30.0pt !important;
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

        .owl-nav {
            bottom: -70px !important;
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
                            src="{{ asset('public/images/whatsapp/mainlogo.png') }}" alt="">
                    </a>
                </h1>
            </div>
            <div class="col-12 col-md-8 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="{{ route('home') }}"><span>Home</span></a></li>
                        <li><a href="{{ route('food-intolerance') }}"><span>Food Intolerance</span></a></li>
                        <li><a href="{{ route('about') }}"><span>About</span></a></li>
                        <li><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                    <span class="icon-menu h3 text-black"></span></a>
            </div>

        </div>

    </div>


</header>

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
                    <input type="text" id="phone_number11" name="phone_number" class="form-control">
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

<div class="site-section pt-0" style="padding-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('public/images/whatsapp/file (3) 1.png') }}" alt="Image"
                    class="img-fluid rounded mb-3">
            </div>
            <div class="col-md-7 d-flex justify-content-end">

                <div class="row justify-content-end mb-4 align-self-center">
                    <div class="col-md-12 text-center">
                        <h1 data-aos="fade-up" class="main-title mb-5"
                            style="    color: #ff0000;
                                            font-family: 'Francois One', Arial;
                                            font-weight: 700;
                                            vertical-align: baseline;        
                                            font-size: 51.0pt;">
                            Discover Your
                            <br>
                            Allergies Today!
                        </h1>

                        <h5 data-aos="fade-up" data-aos-delay="100" class="text-black"
                            style="color: #000000;
                                                                                font-family: 'Francois One', Arial;
                                                                                font-weight: 400;
                                                                                vertical-align: baseline;
                                                                                        font-size: 24.0pt;
                                                                                ">
                            Take Control of Your Health
                            <br>with Precision Allergy & Food Intolerance Testing.
                        </h5>
                        <p
                            style="
                                color: #666666;
                                font-family: 'Francois One', Arial;    font-style: italic;
                                font-weight: 400;
                                vertical-align: baseline;
                                        font-size: 20.0pt;
                                ">
                            Recommended by Doctors.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



{{-- //fro free consultation --}}

<!-- Book a Free Consultation Section -->
<div class="block-quick-info-2" style="position: relative; padding: 20px 0;">
    <!-- Background image and white overlay -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset(`/`) }}/public/images/whatsapp/Rectangle71.png'); background-repeat: no-repeat; background-size: cover; background-position: center; z-index: -1;">
    </div>
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.65); z-index: -1;">
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
                                style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Reach
                                us on WhatsApp</p>
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

                <!-- Book Consultation Popup Trigger -->
                <div class="col-sm-12 col-md-4 quick-info-item book-appointment">
                    <a href="javascript:void(0);" class="open-consult-22" onclick="openConsultForm()"
                        style="text-decoration: none;">
                        <div class="d-flex quick-info-2 align-items-center">
                            <span class="icon icon-home mr-3" style="width: 41.59px;height: 41.59px;"></span>
                            <p class="lead m-0"
                                style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Book a
                                free Consultation!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Floating Popup -->
        <div class="popup-container-22" id="ConsultForm22">
            <div class="popup-content-22">
                <span class="close-btn-22" onclick="closeConsultForm(event)">&times;</span>
                <h4 class="popup-title-22">Book a Free Consultation</h4>

                <form id="consultationForm22" action="{{ route('send-consultation-form') }}"
                    name="consultationForm22" method="POST">
                    @csrf
                    @if (session('success'))
                        {{-- add code to open ConsultForm22 model --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Open the consultation modal when a success message is present
                                var popup = document.getElementById("ConsultForm22");
                                popup.style.display = "block";
                            });
                        </script>

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

                    <!-- Name input -->
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            {{-- <label class="text-black" for="name22"></label> --}}
                            <input type="text" id="name22" name="name" placeholder="Your Name"
                                class="form-control" placeholder="Your Name">
                        </div>
                    </div>

                    <!-- Phone Number input -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            {{-- <label class="text-black" for="phone_number22">Phone Number</label> --}}
                            <input type="tel" id="phone_number22" name="phone_number" placeholder="Phone Number"
                                class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <!-- Collection Point selection -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            {{-- <label class="text-black" for="location22">Choose Service Location</label> --}}
                            <select name="location" id="location22" aria-placeholder="Choose Service Location"
                                class="form-control" required>
                                <option value="" selected disabled>---- Select Service Location ----</option>
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

                    <!-- Google reCAPTCHA -->
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY"
                            data-callback="enableConsultbtn"></div>
                        <span class="help-block" id="recaptcha-error22" style="display: none;">
                            <strong class="error">Please verify that you are not a robot.</strong>
                        </span>
                    </div>

                    <!-- Submit Button -->
                    <div class="row form-group mt-2">
                        <div class="col-md-12">
                            <button disabled id="consultsub22" type="submit"
                                class="btn btn-pill btn-md text-white disabled-btn">
                                Call me back
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="block-services-1 py-5">
    <div class="container">
        <div class="row">
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/11.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="#" style="color: #666666">25+ Years of
                            Expertise in Allergy
                            Testing</a></h3>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/12.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="#" style="color: #666666">180+ Tests with
                            a Single Blood
                            Specimen </a></h3>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/13.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="#" style="color: #666666">ISO Certified &
                            NABL Accredited</a>
                    </h3>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/14.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="#" style="color: #666666">Presence in 7
                            locations in
                            India</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 block-cta-1" style="position: relative; width: 100%; height: auto;">
    <!-- Background layer with opacity -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(' {{ asset(`/`) }}/public/images/whatsapp/Rectangle2.png'); background-size: cover; background-position: center; z-index: 0;">
        <!-- Semi-transparent overlay -->
        <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.56);"></div>
    </div>
    <!-- Content Layer (Text and Image) -->
    <div style="position: relative; z-index: 1; padding: 0px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h2 class="mb-3 mt-0"
                        style="font-family: 'Francois One'; color: white; font-size: 32px; font-weight: 400; line-height: 38px; text-align: left;">
                        Comprehensive<br>ALLERGY TESTS. 180+ tests with a Single Blood Specimen.
                        <br>
                        <span
                            style="font-family: 'Francois One'; font-size: 22px; font-weight: 400; line-height: 29px; text-align: left;">
                            <br>Allergies are much more than a minor inconvenience; studies have shown that untreated
                            allergies can contribute to a plethora of chronic illnesses including asthma, sinus
                            infections, upper respiratory infections, ear infections, and general susceptibility to
                            illness.
                        </span>
                    </h2>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('public/images/whatsapp/189-allergens-13.png') }}" alt="Contact Us"
                        class="responsive-img2">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary">TYPES OF ALLERGENS WE TEST</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="allergypanel#features1-26" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/t1.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3">
                        <a href="allergypanel#features1-26" style="color: #666666;font-weight:700">VEG FOOD</a>
                    </h3>

                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="allergypanel#header2-28" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/t2.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="allergypanel#header2-28"
                            style="color: #666666;font-weight:700">NON-VEG FOOD</a></h3>

                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="allergypanel#header2-2a" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/t3.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="allergypanel#header2-2a"
                            style="color: #666666;font-weight:700">INHALANTS</a>
                    </h3>
                </div>
            </div>

            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="allergypanel#header2-2s" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/t4.jpeg') }}" alt="Image"
                            class="img-fluid"></a>
                    <h3 class="block-service-1-heading mb-3"><a href="allergypanel#header2-2s"
                            style="color: #666666;font-weight:700">CONTACT ALLERGY</a></h3>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="mt-5 block-cta-1" style="position: relative; width: 100%; height: auto; padding: 10px;">
    <!-- Background layer with opacity -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset(`/`) }}/public/images/whatsapp/Rectangle15.png'); background-size: cover; background-position: center; z-index: 0;">
        <!-- Semi-transparent white overlay -->
        <div style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.85);"></div>
    </div>
    <!-- Content Layer (Text and Image) -->
    <div style="position: relative; z-index: 1; padding: 20px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="mbr-white col-lg-6">
                    <h1 class="mb-3 mt-0"
                        style="font-family: Francois One; font-size: 32px; font-weight: 400; line-height: 38px; text-align: left; color: black;">
                        Allergy Treatment:<br>
                        <span
                            style="font-family: Francois One; font-size: 22px; font-weight: 400; line-height: 29px; text-align: left;">
                            The best way to treat allergy is by first knowing the cause.
                        </span>
                        <br>
                        <span
                            style="font-family: 'Francois One'; font-size: 22px; font-weight: 400; line-height: 29px; text-align: left;">
                            <br>Skin Allergy: Skin allergy could be due to certain food, inhalants, or some contact
                            items. It can be found out only through proper diagnosis. With a blood test, we can identify
                            it. Once identified, you can get rid of most allergies without any medication.
                        </span>
                    </h1>
                </div>
                <div class="col-lg-4">
                    <p class="mb-0">
                        <img src="{{ asset('public/images/whatsapp/allergy-tests-chennai-1-649x3141.png') }}"
                            alt="Contact Us" class="responsive-img1">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary"
                    style="font-family: 'Francois One';font-size: 32px;font-weight: 400;line-height: 24px;text-align: center;">
                    ALLERGY SYMPTOMS <br><span
                        style="font-family: 'Francois One';font-size: 22px;font-weight: 400;line-height: 24px;text-align: center;">If
                        you experience any of the following, then you may take an Allergy Test at the earliest.</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'itching' route -->
                    <a href="{{ route('itching') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/itching2.png') }}" alt="Image"
                            class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle"style="">
                            Itching
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'hives' route -->
                    <a href="{{ route('hives') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x25622.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Hives
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'sneeze' route -->
                    <a href="{{ route('sneezing') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 3.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Sneeze
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'running_nose' route -->
                    <a href="{{ route('runnynose') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2564.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Running Nose
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'wheezing' route -->
                    <a href="{{ route('wheezing') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2561.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Wheezing
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'swollen_lips' route -->
                    <a href="{{ route('swollenlips') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_2.png') }}"
                            alt="Image" style="width: 100%; height: 100%; display: block;" class="image-fluid">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Swollen Lips
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'shortness_of_breath' route -->
                    <a href="{{ route('shortnessbreath') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_3.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Shortness of Breath
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'chest_tightness' route -->
                    <a href="{{ route('chesttight') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_4.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Chest Tightness
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'cough' route -->
                    <a href="{{ route('cough') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_1.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Cough
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'swollen-eyes' route -->
                    <a href="{{ route('swolleneye') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 2.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Swollen Eyes
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'skin-rashes' route -->
                    <a href="{{ route('skinrashes') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 6.png') }}"
                            alt="Image" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Skin Rashes
                        </span>
                    </a>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <!-- Link pointing to the 'swollen-face' route -->
                    <a href="{{ route('swollenface') }}" class="thumbnail-link d-block mb-4"
                        style="position: relative; display: block; width: 100%; height: 100%;">
                        <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 5.png') }}"
                            alt="Image" class="img-fluid" style="width: 100%; height: 100%; display: block;">
                        <!-- Text at the bottom of the image -->
                        <span class="bxtitle">
                            Swollen Face
                        </span>
                    </a>
                </div>
            </div>
        </div>


    </div>
</div>
</div>

<div class="block-services-1 py-5 bg-light">
    <div class="container mb-1">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary mt-4">OUR FACILITIES</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/f8.jpg') }}" alt="Image" class="img-fluid"></a>

                </div>
            </div>


            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/f3.jpg') }}" alt="Image" class="img-fluid"></a>
                    </h3>
                </div>
            </div>

            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/f6.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
            </div>


            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <a href="#" class="thumbnail-link d-block mb-4"><img
                            src="{{ asset('public/images/whatsapp/f7.jpg') }}" alt="Image" class="img-fluid"></a>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

<div class="mt-5 block-cta-1" style="background: red">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="mb-3 mt-0 text-white"
                    style="font-family: Francois One;font-size: 25px;font-weight: 400;line-height: 45.38px;text-align: left;">
                    Have questions or ready to schedule your appointment?
                    Reach out to us today!
                </h2>

            </div>
            <div class="col-lg-4">
                <p class="mb-0"><a href="{{ route('contact-us') }}"
                        class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Contact
                        Us</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light mb-3">
    <div class="container">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('public/images/whatsapp/dk.jpeg') }}" alt="Image"
                        class="img-fluid rounded mb-3" style="width: 75% ">
                </div>
                <div class="col-md-9 ml-auto d-flex justify-content-center" style="flex-direction: column;">
                    <h1 class="text-primary mb-3">OUR CELEBRITY CUSTOMERS</h1>
                    <p class="lead ">We are honoured to have some of the top celebrities as our
                        customers, apart from Doctors, Businessmen and Senior Executives. We strive to do our best
                        to everyone and follow standard practices and customer support at the highest levels</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary">What Our Happy Clients Say</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-12">

                <div class="owl-carousel-2 owl-carousel">

                    <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-50 mx-auto mb-4">
                            <img src="{{ asset('public/images/whatsapp/p1.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-50 mx-auto">
                        </div>
                        <div>
                            <h2 class="h5 mb-4">Lakshmikutty
                                (Bank Employee)</h2>
                            <blockquote>&ldquo;I have been having terrible problems on my skin for the last 6 years.
                                Suddenly rashes will appear and itching will start. I met several doctors and used
                                several medicines with no success. Recently I came to know about Proact Healthcare
                                and allergy tests. I gave it a try and it turned out to be an unexpected solution
                                for my itching and rashes. When I got the report I was surprised to know that I have
                                milk allergy. I never thought that milk can cause allergy. Immediately I stopped
                                taking milk and my problems solved. I never had allergic attacks afterwards. Now I
                                am taking my son for the test so that we will know what things he should avoid
                                eating.&rdquo;
                            </blockquote>
                        </div>
                    </div>

                    <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-50 mx-auto mb-4">
                            <img src="{{ asset('public/images/whatsapp/p2.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-50 mx-auto">
                        </div>
                        <div>
                            <h2 class="h5 mb-4">Shahana
                                (Housewife)</h2>
                            <blockquote>&ldquo;My 8 years old son Firoz have been getting allergic attacks since he
                                was six months old. We consulted many doctors and were afraid to give too much
                                medicines as we know medicines have its side effects too. Recently I took him to
                                Proact Healthcare Lab and took Allergy Tests. When we got the report I was shocked
                                to know that Firoz has allergy from bananas and milk. Most of the time we were
                                feeding him these only. I felt so bad. I immediately stopped giving him milk and
                                bananas and his allergies have vanished. I am glad that the problem is
                                solved.&rdquo;
                            </blockquote>
                        </div>
                    </div>

                    <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-50 mx-auto mb-4">
                            <img src="{{ asset('public/images/whatsapp/p3.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-50 mx-auto">
                        </div>
                        <div>
                            <h2 class="h5 mb-4">Jiyesh
                                (Businessman)</h2>
                            <blockquote>&ldquo;For years I have been suffering from allergy and have been under
                                various medications. When I stop the medicine the itching and rashes will come back.
                                I am a non-vegetarian and many people said I should stop eating meat. I tried that
                                too, but with no success. I took allergy test at Proact Healthcare and when I got
                                the report I was surprised to see that I am allergic to tomatoes and dal only. I
                                immediately stopped these from my diet and in 2-3 days my allergy problems
                                disappeared.
                                I am grateful that I could get such an irritating problem solved so easily.
                                &rdquo;
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>


        </div>
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
                                style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Reach
                                us on WhatsApp</p>
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
                                style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Book
                                an appointment</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- our location  --}}
<div class="site-section block-services-1"
    style="background-image: url(' {{ asset(`/`) }}/public/images/whatsapp/Group35.png');">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary text-black">Our Locations</h2>
            </div>
        </div>
        <div class="row">
            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Bengaluru</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>

                            151, 6th cross, 22nd A Main Rd,
                            <br>1st Sector, HSR Layout,
                            <br>Bengaluru-560102
                            <br>Ph. 97462 22668
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Chennai</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>
                            10, Shalom Building, 4,
                            <br>Mannar Street, T.Nagar,
                            <br>Chennai-600017
                            <br>Ph. 96772 11647

                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Hyderabad</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>

                            No.10A&B,Mayfair Gardens,Rd

                            <br>No.12,Banjara Hills

                            <br>Hyderabad-500034
                            <br>Ph. 77366 51520

                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Pune</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>

                            Flat no. 103, Jadhav Complex,
                            <br>Airport Road, Lohegaon
                            <br>Pune-411047
                            <br>Ph. 97462 22668

                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Kochi</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>
                            Ground floor, Chinna Complex,
                            <br>Aiswarya Road,(Metro Pillar 548)
                            <br>Palarivattom, Kochi-682 025
                            <br>Ph. 95672 22877

                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Mumbai</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>
                            F-59, 1st Floor, THE ZONE
                            <br> MALLChandavarkarRd,
                            <br>Borivali (W), Mumbai-400092
                            <br>Ph. 97462 22668

                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#">Trivandrum</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>
                            1st Floor, Crown Plaza, Pattom,
                            <br>Next to St.Mary's Church,
                            <br>Trivandrum-695004
                            <br>Ph. 73569 45575

                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                <div class="block-service-1-card">
                    <h3 class="block-service-1-heading mb-3"><a href="#" style="color: red">HOME
                            COLLECTION</a></h3>
                    <div class="block-service-1-excerpt">
                        <p>
                            Home collection is possible in all
                            <br>these cities.
                            <br>Nominal charges apply
                        </p>
                    </div>
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
                <p class="off-white" style="font-size: 0.75rem;">©2018-2024 Proact Healthcare (P) Limited | All rights
                    reserved</p>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
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
<script src="{{ asset('public/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script>
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
        $('#consultationForm22').validate({
            // Validation rules
            submitHandler: function(form) {
                if (grecaptcha.getResponse() === '') {
                    document.getElementById('recaptcha-error22').style.display = 'block';
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
                },
                message: {
                    required: true,
                    minlength: 10
                }
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
                },
                message: {
                    required: "Please enter your message",
                    minlength: "Your message must be at least 10 characters long"
                }
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
    // Initialize reCAPTCHA for both forms
    function initializeRecaptcha() {
        if (typeof grecaptcha !== 'undefined') {
            grecaptcha.render('recaptcha-container11', {
                'sitekey': '6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY'
            });
        }
    }
</script>
<script>
    // Call the initialize function when the document is ready
    $(document).ready(function() {
        initializeRecaptcha();

        // Validate #consultationForm22 form
        $('#consultationForm22').validate({
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
                location: {
                    required: true
                }
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
                location: {
                    required: "Please select a service location"
                }
            },
            submitHandler: function(form) {
                if (grecaptcha.getResponse() === '') {
                    document.getElementById('recaptcha-error22').style.display = 'block';
                    return false;
                } else {
                    form.submit();
                }
            }
        });

        // Handle modal for consultation form
        var consultpopup = document.getElementById("ConsultForm22");
        var cobtn = document.querySelector(".open-consult-22");
        var consclose = document.getElementsByClassName("close-btn-22")[0];

        // Open the modal when the button is clicked
        cobtn.onclick = function() {
            consultpopup.style.display = "block";
        };

        // Close the modal when the span (x) is clicked
        consclose.onclick = function() {
            consultpopup.style.display = "none";
        };

        // Close the modal when clicked outside of it
        window.onclick = function(event) {
            if (event.target == popup) {
                consultpopup.style.display = "none";
            }
        };
    });

    // Enable the submit button when reCAPTCHA is completed
    function enableConsultbtn() {
        const submitBtn = document.getElementById('consultsub22');
        submitBtn.disabled = false;
        submitBtn.classList.remove('disabled-btn');
        submitBtn.classList.add('active-btn');
    }

    // Close Contact Form Modal when clicked outside the modal content or on the close button
    function closeConsultForm(event) {
        const modal = document.getElementById('ConsultForm22');
        if (event.target === modal || event.type === 'click') {
            modal.style.display = 'none';
        }
    }

    function openConsultForm() {
        document.getElementById('ConsultForm22').style.display = 'block';
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>

</html>
