<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get rid of Allergy problems. Take a Comprehensive Allergy Test today.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
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
        /* Default: no line break */
        .line-break {
            display: none;
        }

        /* On small screens (e.g., less than 768px wide) */
        @media (max-width: 768px) {
            .line-break {
                display: block;
                /* Acts like a <br> on small screens */
            }
        }


        .card-text .result22 {
            text-align: justify;
        }

        /* Reorder for mobile view */
        @media (max-width: 768px) {
            .text-block {
                order: 2;
                /* Text block appears second on mobile */
            }

            .img-block {
                order: 1;
                /* Image block appears first on mobile */
            }
        }


        /* Footer Styling */
        .footer22 {
            background-color: #000;
            /* Black background */
            padding: 80px 0;
            text-align: center;
            width: 100%;
        }

        .footer-text22 {
            color: #fff;
            /* White text */
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .footer-text22 {
                font-size: 12px;
                /* Adjust font size for smaller screens */
            }
        }

        .card-body {
            padding: 0;
        }

        @media(max-width: 768px) {
            .card-body {
                padding: 1.25rem;
            }
        }

        @media(min-width: 1100px) {
            .frm-margin {
                margin-right: 4rem;
            }
        }

        .custom-hr {
            /* border: 0; */
            height: 1px;
            /* Set the height of the line */
            background-color: #bfbfbf;
            /* Line color */
            margin: 20px 0;
            /* Space above and below the line */
            width: 100%;
            position: absolute;
        }

        /* Active blue state after reCAPTCHA success */
        .active-btn {
            background-color: #32bdd2;
            cursor: pointer;
        }

        /* Initial grey state */
        .disabled-btn {
            background-color: grey;
            cursor: not-allowed;
        }

        /* Ensure reCAPTCHA is visible and clickable */
        .g-recaptcha {
            /* margin: 0 auto; */
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


        #flash-message {
            position: fixed;
            z-index: 9999;
            background-color: #3399ff;
            /* Solid green background */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            /* Optional shadow for better visibility */
            transition: opacity 0.5s ease-in-out;
        }

        /* Content inside the flash message */
        .flash-message-content {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Space between icon and text */
        }

        .flash-icon {
            font-size: 20px;
            /* Icon size */
        }

        .flash-text {
            font-size: 16px;
            white-space: nowrap;
            /* Prevent text from wrapping */
        }

        @media (max-width: 768px) {
            .flash-text {
                font-size: 14px;
                /* Smaller font size for mobile screens */
                white-space: normal;
                /* Allow text to wrap on smaller screens */
            }
        }


        /* Flash message position for large screens */
        @media (min-width: 768px) {
            #flash-message {
                top: 20px;
                right: 20px;
                word-wrap: break-word;

            }
        }

        /* Flash message position for small screens (mobile) */
        @media (max-width: 767px) {
            #flash-message {
                top: 20px;
                right: 10px;
                left: 10px;
                /* Ensures the flash message stays within the viewport on mobile */
                max-width: calc(100% - 20px);
                /* Maintain margin on both sides */
                word-wrap: break-word;

            }
        }


        /* For the Locations section */
        .locations-list22 {
            list-style-type: none;
            padding-left: 0;
        }

        .locations-list22 li {
            margin-bottom: 10px;
        }

        .locations-list22 li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        /* For the Facilities section */
        .facilities-section22 .facility-img22 {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .facilities-section22 p {
            font-size: 14px;
            margin-top: 8px;
        }

        /* Contact Information */
        .contact-number22 {
            font-size: 18px;
            margin-top: 20px;
        }

        .contact-bg22 {
            background-color: #bfbfbf96;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 768px) {

            /* Stack the facilities images one below another */
            .facilities-section22 .col-12 {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .locations-list22 li a {
                font-size: 15px;
            }

            .contact-number22 {
                font-size: 16px;
            }
        }





        /* Testimonial section styling */
        /* Card container styling */
        .testimonial-card22 {
            background-color: #ffffff;
            /* Light color related to white */
            position: relative;
            overflow: hidden;
        }



        .rounded-img22 {
            width: 85%;
            position: relative;
            height: auto;
        }

        @media (min-width: 1100px) {
            .rounded-img22 {
                width: 116px;
                height: 113px
            }
        }

        .name22 {
            font-size: 18px;
            font-weight: bold;
            color: #e94e4e;
            /* Red color for the name */
        }

        .profession22 {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        .result22 {
            display: inline-block;
            font-size: 14px;
            color: #555;
            text-align: justify;
        }

        .more-btn22,
        .less-btn22 {
            background-color: transparent;
            border: none;
            color: #007bff;
            cursor: pointer;
        }

        .control22 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev {
            left: -26px;
        }

        .carousel-control-next {
            right: -23px;
        }

        /* Fix to show only one card at a time */
        .carousel-item {
            display: none;
            position: relative;
            transition: transform 0.6s ease-in-out;
        }

        .carousel-item.active {
            display: block;
            position: relative;
            transition: transform 0.6s ease-in-out;
        }

        @media (max-width: 768px) {

            .name22,
            .profession22 {
                text-align: center;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 5%;
            }

            .carousel-control-prev {
                left: 4px;
            }

            .carousel-control-next {
                right: 4px;
            }
        }

        /* Styling for custom arrow icons */
        .previous.round,
        .next.round {
            font-size: 24px;
            /* Adjust the size of the arrow */
            width: 30px;
            /* Adjust width */
            height: 30px;
            /* Adjust height */
            line-height: 30px;
            /* Center the text vertically */
            text-align: center;
            /* Center the text horizontally */
            display: inline-block;
            /* Inline block to apply width/height */
            color: rgb(255, 0, 0);
            /* Background color */
            background-color: #000000
                /* Arrow color */
                cursor: pointer;
            /* Pointer on hover */
        }

        .previous.round:hover,
        .next.round:hover {
            background-color: rgba(0, 0, 0, 0.2);
            /* Darker background on hover */
        }

        /* Mobile view: 3 images per row */
        @media (max-width: 767px) {
            .col-5 {
                width: 100%;
                height: 30%;
            }
        }

        /* Allergen section styling */
        .section-title22 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .section-subtitle22 {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .allergen-item22 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .allergen-text22 {
            margin-top: 0.5rem;
            font-size: 1rem;
            font-weight: bold;
        }

        /* Responsive Styling */
        @media (max-width: 767px) {
            .allergen-images22 {
                flex-direction: column;
            }

            .allergen-item22 img {
                max-width: 100%;
                height: 30%;
            }

        }

        @media (max-width: 480px) {
            .section-title22 {
                margin-top: 1.5rem;
                font-size: 1.3rem;
            }

            .section-subtitle22 {
                font-size: 0.9rem;
            }

        }

        /* Style for the additional info text below the form */
        .info-text {
            /* margin-top: 10rem; */
            /* Add some space between the form and text */
            font-size: 1.1rem;
            /* Medium text size */
            color: #333;
            /* Set the color */
        }

        /* Responsive adjustments for small screens */
        @media (max-width: 767px) {
            .info-text {
                margin-top: 1.5rem;
                font-size: 1rem;
                /* Slightly smaller text on small screens */
                text-align: center;
                /* Center text for smaller screens */
            }
        }

        @media (max-width: 480px) {
            .info-text {
                font-size: 0.9rem;
                /* Smaller text for very small screens */
            }
        }

        .img-container {
            padding-left: 0 !important;
            padding-right: 0 !important;
            position: relative;
            text-align: left;
            margin-bottom: 5px;
            /* Add space below each image */
        }

        .img-container img {
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-top: 5px;
            /* Add space above each image */
        }

        .img-text {
            /* font-family: 'Jost'; */
            font-family: 'Francois One', sans-serif;
            padding: 5px 8px;
            position: absolute;
            bottom: -15px;
            left: 0px;
            color: white;
            font-size: 14px;
            background-color: rgba(0, 0, 0, 0.5);
            /* Optional for better text visibility */
            padding: 2px 5px;
            /* border-radius: 3px; */
        }

        /* Responsive adjustments for small displays */
        @media (max-width: 767px) {
            .img-text {
                font-size: 12px;
                /* Smaller font size on small screens */
                /* bottom: -10px;   Adjust bottom position */
                padding: 1px 3px;
                /* Smaller padding on small screens */
            }
        }

        @media (max-width: 480px) {
            .img-text {
                font-size: 10px;
                /* Even smaller font size for very small screens */
                /* bottom: -5px;    Further adjust bottom position */
                padding-left: 4px;
                /* More compact padding */
            }
        }

        /* Mobile view: 3 images per row */
        @media (max-width: 767px) {
            .col-4 {
                width: 33.33%;
            }

            .sm-padd {
                margin-left: 2px;
                margin-right: 2px;
            }
        }

        .lg-padd {
            margin-top: -2px;
        }


        .cid-toMW46ZFU7 .mbr-figure img {
            width: 100%;
            display: block;
        }

        .cid-toMW46ZFU7 .mbr-section-title {
            padding-bottom: 2rem;
            color: #3e4555;
        }

        .lg-fnt {
            font-size: 3.5rem;
            word-wrap: break-word;
            font-family: 'Francois One', sans-serif;

        }

        .md-fnt {
            font-size: 1.4rem;
            font-family: 'Francois One', sans-serif;
        }

        @media (max-width: 1199px) {
            .cid-toMW46ZFU7 .mbr-figure img {
                width: 100%;
            }
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Jost';
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

        .off-white {
            color: #F8F8F8 !important;
        }

        .owl-nav {
            bottom: -70px !important;
        }

        .site-navbar .site-navigation {
            color: red !important;
        }

        .text-content {
            font-family: 'Jost';
            text-align: right;
            font-size: 20px;
            line-height: 1.5;
            font-weight: bold;

        }

        .text-content a {
            color: blue;
            /* Change color as needed */
            text-decoration: underline;
        }

        .text-content strong {
            font-weight: bold;
            color: black;
            /* Adjust the color if needed */
        }

        @media only screen and (max-width: 767px) {
            .text-content {
                text-align: left;
                margin-top: 10px;
                font-size: 16px;
                /* Adjust font size for smaller displays */
                line-height: 1.8;
                font-weight: bold;
            }

            .smlrg {
                font-size: 1.3rem;
            }

            .text-content p {
                display: flex;
                flex-direction: column;
                line-height: 1.6;
            }

            .site-logo {
                text-align: center;
            }
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
    <header class="site-navbar bg-light" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-11 col-xl-4">
                    <h1 class="mb-0 site-logo">
                        <a href="{{ route('home') }}" class="text-white mb-0">
                            <img style="max-height: 65px; margin: 10px 0;"
                                src="{{ asset('public/images/whatsapp/mainlogo.png') }}" alt="Logo">
                        </a>
                    </h1>
                </div>
                <div class="col-12 col-xl-8 text-content">
                    <p class="city-info">
                        Mumbai, Chennai, Bengaluru, Hyderabad, Trivandrum, Kochi & Pune. <br>
                        <a href="https://wa.me/7358728170" style="text-decoration:none; color: #8c8c8c">Click here to
                            Chat with us
                            now</a> or
                        Call us Now: <strong><a href="tel:+919746222668" style="text-decoration:none; color: #ff3300;">
                                <span class="smlrg">97462 22668</span></a></strong>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <section class="header2 cid-toMW46ZFU7" id="header2-1e">
        <div class="container">
            <div class="row align-items-center" style="padding-top: 1rem;">
                <div class="col-lg-6 text-block">
                    <h1 class="mbr-section-title mbr-white mbr-fonts-style align-left lg-fnt">
                        Get rid of your <strong>ALLERGY &amp; FOOD<br>Intolerance&nbsp;</strong><span
                            class="line-break"></span> problems.<br>Take
                        Action, Today.
                    </h1>
                    <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style mbr-white align-left md-fnt">
                        Itching, hives, sneezing, runny nose, wheezing, chest tightness, shortness of breath, cough,
                        swollen lips, etc. are signs of allergy.<br><em><br></em>
                        <div><em>If you have any of these symptoms, take an allergy test immediately and know the
                                cause.</em></div>
                    </h3>
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-primary md-fnt" type="submit"
                            style="background-color: #3399ff; border-color: #3399ff; padding: 9px 16px; border-radius: 4px;"
                            href="tel:+919746222668">Call Now!</a>
                    </div>
                </div>
                <div class="col-lg-6 align-left img-block">
                    <div class="mbr-figure">
                        <img src="{{ asset('public/images/whatsapp/frontbann.png') }}" alt="Doctor-Allergy Tests"
                            title="Allergy Test">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <!-- Form with fields: name, phone number, service location, and a button -->
        <div class="row">
            <div class="col-lg-6 col-md-12" style="margin-top: 4rem;">
                <form id="consultationForm22" action="{{ route('send-consultation-form') }}" name="consultationForm22"
                    method="POST" class="frm-margin">
                    @csrf

                    @if (session('success'))
                        {{-- add code to open ConsultForm22 modal --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Flash message container
                                var flashMessage = document.createElement('div');
                                flashMessage.id = "flash-message";
                                flashMessage.innerHTML = `
                                                    <div class="flash-message-content">
                                                        <span class="flash-icon">&#10003;</span>  <!-- Success icon -->
                                                        <span class="flash-text">{{ session('success') }}</span>
                                                    </div>
                                                `;
                                document.body.appendChild(flashMessage);

                                // Show flash message
                                setTimeout(function() {
                                    flashMessage.style.display = 'none'; // Auto close after 3 seconds
                                }, 6000);
                            });
                        </script>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif


                    @if ($errors->any())
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Open the consultation modal when a success message is present
                                var popup = document.getElementById("ConsultForm22");
                                // Open the modal
                                if (popup) {
                                    popup.style.display = "block"; // Show the modal

                                }
                            });
                        </script>
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


                    <div class="form-group">
                        <input type="text" id="name22" name="name22" minlength="2" placeholder="Your Name"
                            class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" required name="phone_number22" placeholder="Phone Number"
                            minlength="10" maxlength="15" placeholder="Phone Number" class="form-control"
                            id="phone_number22">
                    </div>
                    <div class="form-group">
                        <select name="location22" id="location22" aria-placeholder="Choose Service Location"
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
                    <!-- Google reCAPTCHA -->
                    <div class="form-group">
                        <div class="g-recaptcha smallrecap" data-sitekey="6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY"
                            data-callback="enableConsultbtn"></div>
                        <span class="help-block" id="recaptcha-error22" style="display: none;">
                            <strong class="error">Please verify that you are not a robot.</strong>
                        </span>
                    </div>

                    <button disabled id="consultsub22" type="submit"
                        class="btn btn-pill btn-md text-white disabled-btn"
                        style="background-color: #3399ff; padding: 8px 14px; border-radius: 4px;">
                        Get a Call Back
                    </button>
                </form>
                <!-- Additional text below the form -->
                <div class="info-text">
                    <h1 class=""
                        style="font-size: 1.9em; font-family: 'Francois One', sans-serif; margin-top:1rem;"><span
                            style="color:#ff0000; ">25+</span> years in Allergy Testing in India.</h1>
                    <h4 class="md-fnt">NABL and ISO Certified operations.</h4>
                </div>
            </div>
            <!-- Images section with text on bottom left -->
            <div class="col-lg-6 col-md-12 sm-padd lag-padd ">
                <div class="row" style="margin-top: 4rem;">
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/itching2.png') }}" class="img-fluid"
                                alt="Itching">
                            <p class="img-text">Itching</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x25622.png') }}"
                                class="img-fluid" alt="Hives">
                            <p class="img-text">Hives</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256%203.png') }}"
                                class="img-fluid" alt="Sneezing">
                            <p class="img-text">Sneezing</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2564.png') }}"
                                class="img-fluid" alt="Runny nose">
                            <p class="img-text">Runny nose</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2561.png') }}"
                                class="img-fluid" alt="Wheezing">
                            <p class="img-text">Wheezing</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_2.png') }}"
                                class="img-fluid" alt="Swollen lips">
                            <p class="img-text">Swollen lips</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_3.png') }}"
                                class="img-fluid" alt="Shortness of breath">
                            <p class="img-text">Shortness of breath</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_4.png') }}"
                                class="img-fluid" alt="Chest tightness">
                            <p class="img-text">Chest tightness</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_1.png') }}"
                                class="img-fluid" alt="Cough">
                            <p class="img-text">Cough</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256%202.png') }}"
                                class="img-fluid" alt="Swollen eyes">
                            <p class="img-text">Swollen eyes</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256%206.png') }}"
                                class="img-fluid" alt="Skin rashes">
                            <p class="img-text">Skin rashes</p>
                        </div>
                    </div>
                    <div class="col-3" style="padding-left: 1px;padding-right:1px;">
                        <div class="img-container">
                            <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256%205.png') }}"
                                class="img-fluid" alt="Face swelling">
                            <p class="img-text">Face swelling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 4rem;">
        <div class="row">
            <!-- Types of Allergens Section -->
            <div class="col-lg-6 col-md-12 allergen-section22">
                <h2 class="section-title22">Types of Allergens we test</h2>
                <h4 class="section-subtitle22"><a href="allergypanel" style="text-decoration: none;">See the complete
                        list of various allergens that are in the panel</a></h4>

                <div class="row allergen-images22">
                    <div class="col-lg-3 col-12 col-5">
                        <div class="allergen-item22">
                            <img src="{{ asset('public/images/whatsapp/t1.jpeg') }}" alt="Allergen 1"
                                class="img-fluid">
                            <p class="allergen-text22">Veg Food</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 col-5">
                        <div class="allergen-item22">
                            <img src="{{ asset('public/images/whatsapp/t2.jpeg') }}" alt="Allergen 2"
                                class="img-fluid">
                            <p class="allergen-text22">Non-veg food</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 col-5">
                        <div class="allergen-item22">
                            <img src="{{ asset('public/images/whatsapp/t3.jpeg') }}" alt="Allergen 3"
                                class="img-fluid">
                            <p class="allergen-text22">Inhalants</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 col-5">
                        <div class="allergen-item22">
                            <img src="{{ asset('public/images/whatsapp/t4.jpeg') }}" alt="Allergen 4"
                                class="img-fluid">
                            <p class="allergen-text22">Contact</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials Section -->
            <div class="col-lg-6 col-md-12 testimonials-section22">
                <h2 class="section-title22"> Testimonials</h2>

                <div id="testimonialCarousel22" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="card testimonial-card22" style="border: none;">
                                {{-- <div class="dashed-box22"> --}}
                                <div class="row no-gutters" style="padding: 2rem; margin-top:0.8rem">
                                    <div class="col-md-4">
                                        <img src="{{ asset('public/images/whatsapp/p1.jpg') }}"
                                            class="card-img rounded-img22" alt="Person 1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title name22">Lakshmikutty</h5>
                                            <p class="profession22">Bank Employee</p>
                                            <p class="card-text result22"
                                                data-text="&ldquo;I have been having terrible problems on my skin for the last 6 years.
                                Suddenly rashes will appear and itching will start. I met several doctors and used
                                several medicines with no success. Recently I came to know about Proact Healthcare
                                and allergy tests. I gave it a try and it turned out to be an unexpected solution
                                for my itching and rashes. When I got the report I was surprised to know that I have
                                milk allergy. I never thought that milk can cause allergy. Immediately I stopped
                                taking milk and my problems solved. I never had allergic attacks afterwards. Now I
                                am taking my son for the test so that we will know what things he should avoid
                                eating.&rdquo;">
                                                &ldquo;I have been having terrible problems on my skin for the last 6
                                                years.
                                                Suddenly rashes will appear and itching will start. I met several
                                                doctors and used
                                                several medicines with no success. Recently I came to know about Proact
                                                Healthcare
                                                and allergy tests. I gave it a try and it turned out to be an unexpected
                                                solution
                                                for my itching and rashes. When I got the report I was surprised to know
                                                that I have
                                                milk allergy. I never thought that milk can cause allergy. Immediately I
                                                stopped
                                                taking milk and my problems solved. I never had allergic attacks
                                                afterwards. Now I
                                                am taking my son for the test so that we will know what things he should
                                                avoid
                                                eating.&rdquo;</p>
                                            <button class="more-btn22" style="display: none;"></button>
                                            <button class="less-btn22" style="display: none;">Less</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <div class="card testimonial-card22" style="border: none;">
                                {{-- <div class="dashed-box22"> --}}
                                <div class="row no-gutters" style="padding: 2rem; margin-top:0.8rem">
                                    <div class="col-md-4">
                                        <img src="{{ asset('public/images/whatsapp/p2.jpg') }}"
                                            class="card-img rounded-img22" alt="Person 2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title name22">Shahana</h5>
                                            <p class="profession22">Housewife</p>
                                            <p class="card-text result22"
                                                data-text="&ldquo;My 8 years old son Firoz have been getting allergic attacks since he
                                was six months old. We consulted many doctors and were afraid to give too much
                                medicines as we know medicines have its side effects too. Recently I took him to
                                Proact Healthcare Lab and took Allergy Tests. When we got the report I was shocked
                                to know that Firoz has allergy from bananas and milk. Most of the time we were
                                feeding him these only. I felt so bad. I immediately stopped giving him milk and
                                bananas and his allergies have vanished. I am glad that the problem is
                                solved.&rdquo;">
                                                &ldquo;My 8 years old son Firoz have been getting allergic attacks since
                                                he
                                                was six months old. We consulted many doctors and were afraid to give
                                                too much
                                                medicines as we know medicines have its side effects too. Recently I
                                                took him to
                                                Proact Healthcare Lab and took Allergy Tests. When we got the report I
                                                was shocked
                                                to know that Firoz has allergy from bananas and milk. Most of the time
                                                we were
                                                feeding him these only. I felt so bad. I immediately stopped giving him
                                                milk and
                                                bananas and his allergies have vanished. I am glad that the problem is
                                                solved.&rdquo;</p>
                                            <button class="more-btn22" style="display: none;"></button>
                                            <button class="less-btn22" style="display: none;">Less</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="card testimonial-card22" style="border: none;">
                                {{-- <div class="dashed-box22"> --}}
                                <div class="row no-gutters" style="padding: 2rem; margin-top:0.8rem">
                                    <div class="col-md-4">
                                        <img src="{{ asset('public/images/whatsapp/p3.jpg') }}"
                                            class="card-img rounded-img22" alt="Person 2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title name22">Jiyesh</h5>
                                            <p class="profession22">Businessman</p>
                                            <p class="card-text result22"
                                                data-text="&ldquo;For years I have been suffering from allergy and have been under
                                various medications. When I stop the medicine the itching and rashes will come back.
                                I am a non-vegetarian and many people said I should stop eating meat. I tried that
                                too, but with no success. I took allergy test at Proact Healthcare and when I got
                                the report I was surprised to see that I am allergic to tomatoes and dal only. I
                                immediately stopped these from my diet and in 2-3 days my allergy problems
                                disappeared.
                                I am grateful that I could get such an irritating problem solved so easily.
                                &rdquo;">
                                                &ldquo;For years I have been suffering from allergy and have been under
                                                various medications. When I stop the medicine the itching and rashes
                                                will come back.
                                                I am a non-vegetarian and many people said I should stop eating meat. I
                                                tried that
                                                too, but with no success. I took allergy test at Proact Healthcare and
                                                when I got
                                                the report I was surprised to see that I am allergic to tomatoes and dal
                                                only. I
                                                immediately stopped these from my diet and in 2-3 days my allergy
                                                problems
                                                disappeared.
                                                I am grateful that I could get such an irritating problem solved so
                                                easily.
                                                &rdquo;</p>
                                            <button class="more-btn22" style="display: none;"></button>
                                            <button class="less-btn22" style="display: none;">Less</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>

                    </div>

                    <!-- Controls (Prev/Next buttons with custom icons) -->
                    <a class="carousel-control-prev control22" href="#testimonialCarousel22" role="button"
                        data-slide="prev">
                        <span class="previous round">&#8249;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next control22" href="#testimonialCarousel22" role="button"
                        data-slide="next">
                        <span class="next round">&#8250;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="custom-hr">


    <div class="container" style="margin-top: 2rem; font-family: 'Francois One', Arial;">
        <div class="row">
            <!-- Our Locations Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <h2 style="font-size: 2.5rem; font-family:  'Francois One', Arial;">Our Locations</h2>
                <ul class="locations-list22">
                    <li><a href="#">Mumbai</a></li>
                    <li><a href="#">Pune</a></li>
                    <li><a href="#">Hyderabad</a></li>
                    <li><a href="#">Bangalore</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Kochi</a></li>
                    <li><a href="#">Trivandrum</a></li>
                </ul>
            </div>

            <!-- Our Facilities Section -->
            <div class="col-lg-6 col-md-12">
                <h2 style="font-size: 2.5rem; font-family:  'Francois One', Arial;">Our Facilities</h2>
                <div class="row text-center facilities-section22">
                    <!-- 4 images in a row for large displays, and stacked on small displays -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="{{ asset('public/images/whatsapp/f8.jpg') }}" class="facility-img22 img-fluid"
                            alt="Facility 1">
                        {{-- <p>Facility 1</p> --}}
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="{{ asset('public/images/whatsapp/f3.jpg') }}" class="facility-img22 img-fluid"
                            alt="Facility 2">
                        {{-- <p>Facility 2</p> --}}
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="{{ asset('public/images/whatsapp/f6.jpg') }}" class="facility-img22 img-fluid"
                            alt="Facility 3">
                        {{-- <p>Facility 3</p> --}}
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="{{ asset('public/images/whatsapp/f7.jpg') }}" class="facility-img22 img-fluid"
                            alt="Facility 4">
                        {{-- <p>Facility 4</p> --}}
                    </div>
                </div>

                <!-- Contact Information Section -->
                <br><br>
                <h3>Contact us for a Free Consultation:</h3>
                <p class="contact-number22">
                    <a href="tel:+919746222668">Call us Now: <span class="contact-bg22">97462 22668</span></a>
                </p>
            </div>
        </div>
    </div>

    {{-- add a small footer here. should be in black color bg. text should be in white color. add "©2018-2024 Proact Healthcare (P) Limited | All rights reserved" in center for all screen. make it responsive. --}}


    <footer class="footer22">
        <div class="container22">
            <p class="footer-text22">©2018-2024 Proact Healthcare (P) Limited | All rights reserved</p>
        </div>
    </footer>


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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        $(document).ready(function() {


            // Adjust reCAPTCHA size on window resize
            $(window).on('resize', function() {
                grecaptcha.render();
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

            // Validate #consultationForm22 form
            $('#consultationForm22').validate({
                rules: {
                    name22: {
                        required: true,
                        minlength: 2
                    },
                    phone_number22: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    location22: {
                        required: true
                    }
                },
                messages: {
                    name22: {
                        required: "Please enter your name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    phone_number22: {
                        required: "Please enter your phone number",
                        digits: "Please enter a valid phone number",
                        minlength: "Your phone number must be at least 10 digits",
                        maxlength: "Your phone number cannot exceed 15 digits"
                    },
                    location22: {
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
        });

        // Initialize reCAPTCHA for both forms
        function initializeRecaptcha() {
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.render('recaptcha-container11', {
                    'sitekey': '6LeKJBAqAAAAAAF041g1oz9mrl4MJMCUwywAvHmY'
                });
            }
        }

        function enableConsultbtn() {
            const submitBtn = document.getElementById('consultsub22');
            submitBtn.disabled = false;
            submitBtn.classList.remove('disabled-btn');
            submitBtn.classList.add('active-btn');
        }

        $(document).ready(function() {
            $('.result22').each(function() {
                var fullText = $(this).data('text'); // Get the full text from the data-text attribute
                var shortText = fullText.substring(0, 129); // Show only the first 100 characters

                // Only apply shortening if the full text is longer than 100 characters
                if (fullText.length > 77) {
                    $(this).html(shortText +
                        '... <span class="more-btn22">More</span>'); // Add the "More" button inline
                    $(this).siblings('.more-btn22').show(); // Show the "More" button if hidden
                }
            });

            // Toggle full text on clicking "More"
            $(document).on('click', '.more-btn22', function() {
                var fullText = $(this).parent().data('text');
                $(this).parent().html(fullText +
                    ' <span class="less-btn22">Less</span>'); // Display full text and "Less" button
            });

            // Collapse text on clicking "Less"
            $(document).on('click', '.less-btn22', function() {
                var shortText = $(this).parent().data('text').substring(0, 129);
                $(this).parent().html(shortText +
                    '... <span class="more-btn22">More</span>'); // Collapse back to short text
            });
        });
    </script>

</body>

</html>
