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
                            <li><a href="{{ route('about') }}"><span>About</span></a></li>
                            <li class="active"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3 text-black"></span></a></div>

            </div>

        </div>


    </header>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5 aos-init aos-animate" data-aos="fade">

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

                    <form action="{{ route('send-contact-form') }}" class="p-5 bg-white" style=""
                        id="messageForm" name="messageForm" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="phone_number">Phone Number</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="location">Choose Collection Point</label>
                                <select name="location" id="location" class="form-control">
                                    <option class="text-center" value="" selected disabled>---- Choose
                                        Collection Point ----</option>
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
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                    placeholder="Write your message or questions here..."></textarea>
                            </div>
                        </div>


                        <!-- Add reCAPTCHA -->
                        {!! NoCaptcha::display(['data-callback' => 'enableSubmitBtn']) !!}
                        @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong class="error">{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                        @endif



                        <div class="row form-group mt-2">
                            <div class="col-md-12">
                                <input disabled id="submitBtn" type="submit" value="Send"
                                    class="btn btn-pill btn-primary btn-md text-white"
                                    style=" font-size: 18px;
                                            font-weight: bold;
                                            padding:10px 20px 10px 20px">
                            </div>
                        </div>


                    </form>
                    <!-- Include reCAPTCHA script -->
                    {!! NoCaptcha::renderJs() !!}

                </div>
                <div class="col-md-5 aos-init aos-animate" data-aos="fade" data-aos-delay="100">



                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>At Proact Healthcare, we are dedicated to revolutionizing the way you approach allergy
                            testing and healthcare. Our mission is simple: to empower individuals like you to take
                            control of your health and live your best life, free from the limitations of allergies and
                            intolerances.</p>
                        <p><a href="{{ route('about') }}"
                                class="btn btn-primary px-4 py-2 text-white btn-pill btn-sm">Learn More</a></p>
                    </div>

                    <div class="p-4 mb-3 bg-white">

                        <p class="mb-0 font-weight-bold lead">Phone</p>
                        <p class="mb-4 lead"><a href="tel:9746222668">+91 97462 22668</a></p>

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
    <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js') }}"></script>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#messageForm").validate({
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
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    phone_number: {
                        required: "Please enter your phone number",
                        digits: "Please enter only digits",
                        minlength: "Your phone number must be at least 10 digits long",
                        maxlength: "Your phone number must be no more than 15 digits long"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                },
                submitHandler: function(form) {
                    $('#submitBtn').val('WAIT.......');
                    $('#submitBtn').attr('disabled', true);
                    form.submit();
                }
            });
        });
    </script>

    <script>
        function enableSubmitBtn() {
            document.getElementById('submitBtn').disabled = false;
        }
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>