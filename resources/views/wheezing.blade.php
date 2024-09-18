<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wheezing</title>
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

        .custom-heading {
            font-family: 'Francois One', sans-serif;
            font-size: 28px;
            /* Default for large screens */
            font-weight: 400;
            line-height: 1.4;
            text-align: left;
            padding-left: 5rem;
            /* Default padding for large screens */
        }

        /* Media Query for small devices (like smartphones) */
        @media (max-width: 576px) {
            .custom-heading {
                font-size: 20px;
                /* Adjust font size for small devices */
                padding-left: 1rem;
                /* Reduce padding for small screens */
            }
        }

        /* Media Query for medium devices (like tablets) */
        @media (max-width: 768px) {
            .custom-heading {
                font-size: 24px;
                /* Adjust font size for medium devices */
                padding-left: 1rem;
                /* Adjust padding for medium screens */
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

    <!-- Itching contents here -->
    <div class="site-section block-services-1" style="background-image: url(' {{asset(`/`) }}/public/images/whatsapp/Group35.png'); height:auto; background-repeat: no-repeat; background-size: cover;">
        <div class="container" style="max-width: 100%; padding: 0 15px;">
            <div class="row align-items-left justify-content-between">
                <!-- Title and Description -->
                <div class="col-lg-7 mb-4 mb-lg-0 custom-heading">
                    <h2 class="mb-3 mt-0 text-dark" style="font-family: 'Francois One', sans-serif; font-size: 28px; font-weight: 400; line-height: 1.4; text-align: left;">
                        ALLERGY SYMPTOMS<br>Wheezing
                    </h2>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <p style="color: #FF0000; font-family: Rubik, sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5;">
                        Call : <a href="tel:+919746222668" style="color: #FF0000;">97462 22668</a>
                    </p>
                    <p style="color: #FF0000; font-family: Rubik, sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5;">
                        Click here to <span style="font-weight: 700;">Chat &nbsp;
                            <img src="{{asset('public/images/whatsapp/wappVector.png')}}" alt="Chat" style="width: 30px; height: 30px;">
                        </span>
                    </p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="text-center" style="margin-top: 20px;">
                <img src="{{asset('/public/images/whatsapp/wheezing480x320.png')}}" alt="Itching Image" style="width: 100%; max-width: 555px; height: auto; display: block; margin: 0 auto;">
            </div>

            <!-- Paragraph Content Below the Image -->
            <div class="text-center" style="margin-top: 20px;">
                <p style="width: 100%; max-width: 555px; margin: 0 auto; font-family: Francois One, sans-serif; font-size: 18px; font-weight: 400; line-height: 1.6; text-align: left; color: #000000;">
                    Wheezing happens when the airways are tightened, blocked, or inflamed, making a person's breathing sound like whistling or squeaking. Common causes include a cold, asthma, allergies, or more serious conditions, such as chronic obstructive pulmonary disease (COPD). Wheezing is a high-pitched, coarse whistling sound when you breathe. Many people with respiratory allergies know that wheezing often comes with hay fever season.
                    <br><br>
                    Wheezing is the shrill whistle or coarse rattle you hear when your airway is partially blocked. It might be blocked because of an allergic reaction, a cold, bronchitis or allergies. Wheezing is also a symptom of asthma, pneumonia, heart failure and more. It could go away on its own, or it could be a sign of a serious condition.
                    <br><br>
                    Causes:
                    Inflammation and narrowing of the airway in any location, from your throat out into your lungs, can result in wheezing.
                    <br><br>
                    The most common causes of recurrent wheezing are asthma and chronic obstructive pulmonary disease (COPD), which both cause narrowing and spasms (bronchospasms) in the small airways of your lungs.
                    <br><br>
                    However, any inflammation in your throat or larger airways can cause wheezing. Common causes include infection, an allergic reaction or a physical obstruction, such as a tumor or a foreign object that's been inhaled.
                    <br><br>
                    All of the following conditions can lead to wheezing:
                    <br><br>
                    Allergies<br>
                    Anaphylaxis (a severe allergic reaction, such as to an insect bite or medication)<br>
                    Asthma<br>
                    Bronchiectasis (a chronic lung condition in which abnormal widening of bronchial tubes inhibits mucus clearing)<br>
                    Bronchiolitis (especially in young children)<br>
                    Bronchitis<br>
                    Childhood asthma<br>
                    COPD<br>
                    Emphysema<br>
                    Epiglottitis (swelling of the "lid" of your windpipe)<br>
                    Foreign object inhaled: First aid<br>
                    Gastroesophageal reflux disease (GERD)<br>
                    Heart failure<br>
                    Lung cancer<br>
                    Medications (particularly aspirin)<br>
                    Obstructive sleep apnea (a condition in which breathing stops and starts during sleep)<br>
                    Pneumonia<br>
                    Respiratory syncytial virus (RSV) — especially in young children<br>
                    Respiratory tract infection (especially in children younger than 2)<br>
                    Smoking<br>
                    Vocal cord dysfunction (a condition that affects vocal cord movement)
                    <br><br>
                    Continued wheezing demand an IGE test to eliminate the an allergy cause.<br>
                    If IGE levels are high, must go for a complete allergy test.<br>
                </p><br>
                <!-- Button 1: All Allergy Symptoms -->
                <!-- Button 1: All Allergy Symptoms -->
                <!-- Anchor 1: All Allergy Symptoms -->
                <a href="{{ route('allergysymptoms') }}"
                    style="font-family: 'Francois One', sans-serif; font-size: 22px; font-weight: 400; line-height: 1.5; text-align: left; background-color: white; border: none; padding: 10px 20px; color: red; border-radius: 5px; width: auto; max-width: 300px; display: inline-block; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);"
                    class="btn btn-primary active">
                    All Allergy Symptoms
                </a>

                &nbsp;&nbsp;&nbsp;

                <!-- Anchor 2: Home -->
                <a href="{{ route('home') }}"
                    style="font-family: 'Francois One', sans-serif; font-size: 22px; font-weight: 400; line-height: 1.5; text-align: left; background-color: #0099ff; color: white; border: none; padding: 10px 20px; border-radius: 5px; width: auto; max-width: 300px; display: inline-block; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);"
                    class="btn btn-primary active">
                    Home
                </a>

                <br><br>


                <!-- <button type="button" style="">All Allergy Symptoms</button> -->
            </div>
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
                    <div class="col-sm-12 col-md-4 quick-info-item">
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
                    <div class="row">

                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                            <h2 class="footer-heading mb-4 off-white">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>

                            </ul>
                        </div>



                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                            <h2 class="footer-heading mb-4 off-white">Contact</h2>
                            <ul class="list-unstyled">
                                <li><a href="tel:9746222668">
                                        <p class="lead off-white"> +91 97462 22668 </p>
                                    </a></li>
                            </ul>
                        </div>

                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                            <h2 class="footer-heading mb-4 off-white">Follow Us</h2>
                            <a href="https://www.facebook.com/PreventiveCareLab" class="pl-0 pr-3 "><span
                                    style="font-size:2rem" class="icon-facebook"></span></a>
                            <a href="https://www.youtube.com/@proacthealthcareindia" class="pl-3 pr-3"><span
                                    style="font-size:2rem" class="icon-youtube"></span></a>
                            <a href="https://www.instagram.com/proacthealthcare1/" class="pl-3 pr-3"><span
                                    style="font-size:2rem" class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5">
                <div class="col-12 text-md-center text-left">
                    <p class="off-white" style="font-size: 0.75rem;">©2018-2024 Proact Healthcare (P) Limited | All rights reserved
                    </p>
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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZHMTSD"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>