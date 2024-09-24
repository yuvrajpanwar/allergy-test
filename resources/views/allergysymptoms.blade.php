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
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Dosis:wght@400&display=swap" rel="stylesheet">

    <style>
        .custom-heading {
            padding-left: 5%;
            /* Use a percentage for responsive padding */
            margin-top: 20px;
            text-align: left;
        }

        .contact-info {
            padding-left: 5%;
            /* Use a percentage for responsive padding */
            padding-right: 5%;
            /* Use a percentage for responsive padding */
            margin-top: 20px;
            text-align: left;
        }

        /* Adjust alignment for large displays */
        @media (min-width: 1200px) {
            .custom-heading {
                padding-left: 10%;
                /* Increase padding for large screens */
                text-align: left;
            }

            .contact-info {
                padding-left: 5%;
                /* Adjust padding for large displays */
                padding-right: 5%;
                /* Adjust padding for large displays */
            }
        }

        /* Adjustments for medium displays */
        @media (max-width: 1199px) {

            .custom-heading,
            .contact-info {
                padding-left: 8%;
                /* Slightly larger padding for medium screens */
                padding-right: 8%;
                /* Slightly larger padding for medium screens */
            }

            .custom-heading h2 {
                font-size: 24px;
            }

            .contact-info p {
                font-size: 17px;
            }
        }

        /* Stack content vertically on small screens */
        @media (max-width: 767px) {

            /* Adjusted breakpoint for small devices */
            .custom-heading,
            .contact-info {
                padding: 0 5%;
                /* Responsive padding */
                text-align: left;
                /* Align content to the left */
            }

            .custom-heading {
                order: 1;
                /* Ensure heading appears first */
            }

            .contact-info {
                order: 2;
                /* Ensure contact info appears below the heading */
                margin-top: 10px;
                /* Adjust spacing between sections */
            }

            .custom-heading h2 {
                font-size: 22px;
                margin-bottom: 10px;
            }

            .contact-info p {
                font-size: 16px;
            }
        }

        .site-section {
            padding-top: 0;
        }





        /* Icons Styling */
        /* Icons Styling */
        /* Icons Styling */
        /* Icons Styling */
        /* Icons Styling */
        /* Icons Styling */
        /* Icons Styling */
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

        .card-underline {
            text-align: center;
            /* Center the line under the heading */
            margin-top: 10px;
            /* Adjust margin as needed */
        }

        .line {
            height: 2px;
            /* Thickness of the line */
            width: 15%;
            /* Adjust width as needed */
            background-color: red;
            /* Color of the line */
            margin: 0 auto;
            /* Center the line */
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

<body>

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


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3 text-black"></span></a></div>

            </div>

        </div>


    </header>



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
            <img src="{{asset('public/images/whatsapp/frame376.png')}}" alt="WhatsApp" class="icon-image11">
        </a>
        <div class="icon11 contact11" title="Contact Us" onclick="openContactForm11()">
            <img src="{{asset('public/images/whatsapp/frame375.png')}}" alt="Contact Us" class="icon-image11">
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
                            <option class="text-center" value="" selected="" disabled="">---- Choose Collection Point ----
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

                <div class="row form-group mt-2">
                    <div class="col-md-12">
                        <input disabled id="submitBtn11" type="submit" value="Send"
                            class="btn btn-pill btn-primary btn-md text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Include reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>




    <!-- Itching contents here -->
    <div class="site-section block-services-1" style="background-image: url(' {{asset(`/`) }}/public/images/whatsapp/Group35.png');  height: auto; background-repeat: no-repeat; background-size: cover;">
        <div class="container" style="max-width: 100%; padding: 0 15px;">
            <div class="row align-items-left justify-content-between flex-column flex-lg-row">
                <!-- Title and Description -->
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0 custom-heading">
                    <h2 class="mb-3 mt-0 text-dark" style="font-family: 'Francois One', sans-serif; font-size: 28px; font-weight: 400; line-height: 1.4;">
                        ALLERGY SYMPTOMS<br><span style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 31.76px;text-align: center;">Some of the common allergy symptoms are are given below</span>
                    </h2>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4 col-md-12 contact-info">
                    <p style="color: #FF0000; font-family: 'Francois One', sans-serif; font-size: 19px; font-weight: 700; line-height: 1.5;">
                        Call : <a href="tel:+919746222668" style="color: #FF0000;">97462 22668</a>
                    </p>
                    <p style="color: #FF0000; font-family: 'Francois One', sans-serif; font-size: 19px; font-weight: 700; line-height: 1.5;">
                    <a href="https://wa.me/7358728170">Click here to <span style="font-weight: 700;">Chat</a> &nbsp;
                            <img src="{{asset('public/images/whatsapp/wappVector.png')}}" alt="Chat" style="width: 30px; height: 30px;">
                        </span>
                    </p>
                </div>
            </div>


            <div class="site-section">
                <div class="container">
                    <!-- Heading -->
                    <!-- <div class="row mb-5">
                        <div class="col-md-12 text-center">
                            <h2 class="site-section-heading text-center font-secondary">TYPES OF ALLERGENS WE TEST</h2>
                        </div>
                    </div> -->

                    <!-- Image grid -->
                    <div class="row">
                        <!-- Image 1: Veg Food -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('itching') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/itching2.png') }}" alt="Veg Food Image" class="img-fluid" style="max-width: 100%; height: auto; padding-bottom: 15px;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('itching') }}" style="font-family: 'Francois One', sans-serif; font-size: 22.4px; font-weight: 400; line-height: 38px; text-align: left;">ITCHING</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Itching is an irritating sensation that makes you want
                                    to scratch your skin. Sometimes it can feel like pain,
                                    but it is different. Often, you feel itchy in one area
                                    in your body, but sometimes you may feel itching all over.
                                    Along with the itching, you may also have a rash or hives.
                                    If the itching starts in 1-3 hours of consuming food, then
                                    food allergy can be suspected.
                                </p>
                            </div>
                        </div>

                        <!-- Image 2: Non-Veg Food -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('hives') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x25622.png') }}" alt="Non-Veg Food Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('hives') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">HIVES</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Hives are raised welts on the skin that appear in
                                    varying shapes and sizes. Although hives are very
                                    common, their cause is often elusive. Hives can
                                    change size rapidly and move around, disappearing
                                    in one place and reappearing in other places,
                                    often in a matter of hours. Ordinary hives
                                    flare up suddenly and might go away in sometime,
                                </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('sneezing') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 3.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('sneezing') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SNEEZING</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Sneezing is your body's way of removing irritants from your
                                    nose or throat. A sneeze is a powerful, involuntary expulsion
                                    of air. Sneezing often happens suddenly and without warning.
                                    Sneezing can be triggered by a variety of things, including
                                    allergens, viruses, such as the common cold or flu, nasal
                                    irritants or inhalation of corticosteroids through a
                                    nasal spray.
                                </p>
                            </div>
                        </div>
                        <!-- Image 4: Contact Allergy -->
                        <div class="mb-4 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('runnynose') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2564.png') }}" alt="Contact Allergy Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('runnynose') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">RUNNY NOSE</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    A runny nose can be caused by anything that
                                    irritates or inflames the nasal tissues.
                                    Infections — such as the common cold and influenza
                                    — allergies and various irritants may all cause a
                                    runny nose. Excess drainage, ranging from a clear
                                    fluid to thick mucus, from the nose and nasal passages.
                                    A runny nose may be annoying and uncomfortable,
                                    but it usually clears up on its own. Occasionally,
                                    it can be a sign of a more serious problem. A runny
                                    nose may be serious in infants. 
                                </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('wheezing') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2561.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('wheezing') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">WHEEZING</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Wheezing happens when the airways are tightened,
                                    blocked, or inflamed, making a person's breathing
                                    sound like whistling or squeaking. Common causes include a
                                    cold, asthma, allergies, or more serious conditions,
                                    such as chronic obstructive pulmonary disease (COPD).
                                    Wheezing is a high-pitched, coarse whistling sound when
                                    you breathe. Many people with respiratory allergies
                                    know that wheezing often comes with hay fever season. 
                                </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('chesttight') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_4.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('chesttight') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">CHEST TIGHTNESS</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Chest tightness: Seasonal allergies are extremely common and
                                    often uncomfortable, but when should you see a doctor? ...
                                    Even so, downplaying the condition can make it easy to
                                    ignore signs of serious allergies, such as chest tightness
                                    and difficulty breathing, which require medical attention.
                                    Asthma mainly affects your lungs, and may cause coughing,
                                    wheezing, chest tightness, shortness of breath or rapid
                                    breathing. Undetected allergy can cause asthma in the longterm. </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('shortnessbreath') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2563.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('shortnessbreath') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SHORTNESS OF BREATH</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Shortness of breath may be triggered by some common foods
                                    that some people are allergic to such as eggs, milk, nuts,
                                    shellfish, and wheat. Things in the air that can set off your
                                    allergies are dust, pollen, and pet dander -- tiny pieces of
                                    skin that are shed by cats, dogs, and other animals.
                                    Shortness of breath, or breathlessness, is when a person
                                    has trouble taking in enough air to breathe. It can range
                                    from mild to severe. </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('cough') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256_1.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('cough') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">COUGH</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Asthma and allergy coughs are typically caused by
                                    swelling or irritation of the airways. Allergies
                                    like hay fever can cause a chronic dry cough. If
                                    you're sensitive to dust, pet dander, pollen, mold,
                                    or other common allergens, then your allergy symptoms
                                    may include a cough. Chronic allergies, hyperactive
                                    gag reflex, and acid reflux can create a prolonged
                                    irritation in your throat and cause an ongoing cough. </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('swollenlips') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x2562.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('swollenlips') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SWOLLEN LIPS</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Swollen lips are caused by underlying inflammation
                                    or a build-up of fluid under the skin of your lips.
                                    Many things can cause swollen lips, from minor skin
                                    conditions to severe allergic reactions. Allergies to
                                    certain foods, medications, or the bite or sting of an
                                    insect are fairly common triggers for swollen lips and
                                    other symptoms. Foods often associated with allergies include,
                                    milk, eggs, peanuts, shellfish, soy, wheat etc.. </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('swolleneye') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 2.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('swolleneye') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SWOLLEN EYES</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Swollen eyelids cause a puffy appearance to the eyes.
                                    Causes of swollen eyelids include fluid retention, allergies
                                    , eye infections and eye injuries. Virtually any cause of
                                    inflammation to the eye area may manifest as eyelid swelling,
                                    although allergic reactions are likely the most common cause.
                                    With allergic reactions, the eyes may also be red, itchy as
                                    well as swollen. Sometimes the swelling may be below the eyes on both sides. </p>
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%; padding: 15px;">
                                <a href="{{ route('skinrashes') }}" class="thumbnail-link d-block mb-3">
                                    <img src="{{ asset('public/images/whatsapp/skin-rashes-480x320-384x256 6.png') }}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('skinrashes') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SKIN RASHES</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    Skin rashes can occur from a variety of factors,
                                    including infections, heat, allergens, immune system
                                    disorders and medications. One of the most common skin
                                    disorders that causes a rash is atopic dermatitis, also
                                    known as eczema. A rash is a noticeable change in the
                                    texture or color of your skin. Your skin may become scaly,
                                    bumpy, itchy, or otherwise irritated. Rashes also have the
                                    tendency to suddenly appear and disappear.
                            </div>
                        </div>
                        <!-- Image 3: Inhalants -->
                        <div class="mb-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4 text-center">
                            <div class="block-service-1-card" style="max-width: 100%;  padding: 10px;"">
                                <a href=" {{ route('swollenface') }}" class="thumbnail-link d-block mb-3">
                                <img src="{{asset('public/images/whatsapp/skin-rashes-480x320-384x256 5.png')}}" alt="Inhalants Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </a>
                                <h3 class="block-service-1-heading mb-2">
                                    <a href="{{ route('swollenface') }}" style="font-family: Francois One;font-size: 22.4px;font-weight: 400;line-height: 38px;text-align: left;">SWOLLEN FACE</a>
                                </h3>
                                <div class="card-underline align-center">
                                    <div class="line"></div>
                                </div>
                                <p class="block-service-1-text" style="font-family: 'Dosis', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px; text-align: justify;color: #000000; padding: 15px 0;">
                                    A swollen face due to an allergic reaction may be accompanied
                                    by other symptoms. These are the symptoms of anaphylaxis,
                                    a serious allergic reaction. Seasonal allergies, or hay fever,
                                    can occur in early spring and can cause a number of facial
                                    symptoms. This includes red, watery, itchy, and swollen eyes.
                                    Severe allergies can lead to allergic conjunctivitis, which
                                    is an oozing inflammation of the eyes.
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Paragraph Content Below the Image -->

        </div>
    </div>


    <div class="block-quick-info-2" style="position: relative; padding: 20px 0;">
        <!-- Background image -->
        <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{asset(`/`)}}/public/images/whatsapp/Rectangle71.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        z-index: -1;
    "></div>

        <!-- White overlay -->
        <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.65); /* Semi-transparent white */
        z-index: -1;
    "></div>

        <div class="container" style="position: relative; z-index: 1;">
            <div>
                <div class="row">
                    <!-- WhatsApp Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0 quick-info-item">
                        <a class="align-items-center d-flex quick-info-link" href="https://wa.me/7358728170" target="_blank" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-whatsapp mr-3" style="width: 48px;height: 48px;color: #016426;"></span>
                                <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Reach us on WhatsApp</p>
                            </div>
                        </a>
                    </div>

                    <!-- Call Us Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0 quick-info-item">
                        <a href="tel:9746222668" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-phone mr-3" style="width: 46.68px;height: 46.69px;"></span>
                                <div class="text">
                                    <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Call us today</p>
                                    <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">+91 97462 22668</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Book Appointment Link -->
                    <div class="col-sm-12 col-md-4 quick-info-item book-appointment">
                        <a href="{{ route('contact-us') }}" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center">
                                <span class="icon icon-home mr-3" style="width: 41.59px;height: 41.59px;"></span>
                                <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;">Book an appointment</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>



    {{-- our location  --}}
    <div class="site-section block-services-1" style="background-image: url(' {{asset(`/`) }}/public/images/whatsapp/Group35.png');">
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
                                <h2 class="footer-heading mb-4 off-white">Follow Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
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
                    <p class="off-white" style="font-size: 0.75rem;">©2018-2024 Proact Healthcare (P) Limited | All rights reserved</p>
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
            document.getElementById('submitBtn11').disabled = false;
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
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>