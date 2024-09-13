<!DOCTYPE html>
<html lang="en">

<head>
    <title>Runny nose</title>
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
    <style>

.custom-heading {
    font-family: 'Francois One', sans-serif;
    font-size: 28px; /* Default for large screens */
    font-weight: 400;
    line-height: 1.4;
    text-align: left;
    padding-left: 5rem; /* Default padding for large screens */
}

/* Media Query for small devices (like smartphones) */
@media (max-width: 576px) {
    .custom-heading {
        font-size: 20px; /* Adjust font size for small devices */
        padding-left: 1rem; /* Reduce padding for small screens */
    }
}

/* Media Query for medium devices (like tablets) */
@media (max-width: 768px) {
    .custom-heading {
        font-size: 24px; /* Adjust font size for medium devices */
        padding-left: 2rem; /* Adjust padding for medium screens */
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
                                src="{{ asset('public/images/whatsapp/logo-transparent.webp') }}" alt="">
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
    <div class="site-section block-services-1" style="background-image: url('http://localhost/allergy-test/public/images/whatsapp/Group35.png'); height:auto; background-repeat: no-repeat; background-size: cover;">
        <div class="container" style="max-width: 100%; padding: 0 15px;">
            <div class="row align-items-left justify-content-between">
                <!-- Title and Description -->
                <div class="col-lg-7 mb-4 mb-lg-0 custom-heading">
                    <h2 class="mb-3 mt-0 text-dark" style="font-family: 'Francois One', sans-serif; font-size: 28px; font-weight: 400; line-height: 1.4; text-align: left;">
                        ALLERGY SYMPTOMS<br>Runny nose
                    </h2>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <p style="color: #FF0000; font-family: Rubik, sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5;">
                        Call : <a href="tel:+919746222668" style="color: #FF0000;">97462 22668</a>
                    </p>
                    <p style="color: #FF0000; font-family: Rubik, sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5;">
                        Click here to <span style="font-weight: 700;">Chat
                            <img src="http://localhost/allergy-test/public/images/whatsapp/wappvector.png" alt="Chat" style="width: 30px; height: 30px;">
                        </span>
                    </p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="text-center" style="margin-top: 20px;">
                <img src="http://localhost/allergy-test/public/images/whatsapp/runny480x320.png" alt="Itching Image" style="width: 100%; max-width: 555px; height: auto; display: block; margin: 0 auto;">
            </div>

            <!-- Paragraph Content Below the Image -->
            <div class="text-center" style="margin-top: 20px;">
                <p style="width: 100%; max-width: 555px; margin: 0 auto; font-family: Francois One, sans-serif; font-size: 18px; font-weight: 400; line-height: 1.6; text-align: left;">
                    A runny nose can be caused by anything that irritates or inflames the nasal tissues. Infections — such as the common cold and influenza — allergies and various irritants may all cause a runny nose. Excess drainage, ranging from a clear fluid to thick mucus, from the nose and nasal passages. A runny nose may be annoying and uncomfortable, but it usually clears up on its own. Occasionally, it can be a sign of a more serious problem. A runny nose may be serious in infants.
                    <br><br>
                    When a cold virus or an allergen such as pollen or dust first enters your body, it irritates the lining of your nose and sinuses (or air-filled pockets around the face) and your nose starts to make a lot of clear mucus. This mucus traps the bacteria, virus or allergens and helps flush them out of your nose and sinuses.
                    <br><br>
                    How does your nose work to protect your body?
                    Your breathing process starts in your nose. Air gets into your lungs through your nose. It helps filter, humidify, warm or cool the air that comes through it so that the air that gets to your lungs is clean.
                    A special lining of mucosa, or a moist tissue, covers the area inside your nose and consists of many mucus-producing glands. As bacteria, allergens, dust or other harmful particles come into the nose, the mucus traps them. Mucus contains antibodies, or enzymes, which kill unwanted bacteria and viruses.
                    The mucosa lining also includes cilia, tiny hair-like structures. The cilia are continually in motion and move the collected harmful particles and the mucus that they are trapped in through your nose into the back of your throat. It’s then swallowed and destroyed by the acid in your stomach. Mucus and particles can also be coughed up or sneezed out.
                    When outdoor temperatures turn cold, the pace of this process slows down. Many times, the mucus stays in your nose and then drips or dribbles out.
                    <br><br>
                    Why is mucus an important part of the airway system?
                    <br><br>
                    Mucus is needed to keep your airway moist and working properly. Not only does mucus stop harmful particles from getting into your lungs, but it also contains antibodies to help destroy bacteria. If too much mucus is produced, your body wants to get rid of it, leading to coughing and spitting the extra mucus out and blowing it out of your nose.
                    <br><br>
                    Why does a runny nose happen? What causes a runny nose?
                    Your runny nose may have one or more of several causes. Possible causes include:
                    • Allergies.
                    • Cold temperatures.
                    • Common cold.
                    • Flu.
                    • Gustatory rhinitis, a form of nonallergic rhinitis that causes a runny nose when you eat certain foods.
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


    <div class="block-quick-info-2"
        style="background-image: url('http://localhost/allergy-test/public/images/whatsapp/Rectangle71.png'); background-repeat: no-repeat; background-size: cover; padding: 20px 0;">
        <div class="container">
            <div>
                <div class="row">

                    <!-- WhatsApp Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0" style="text-align: center;">
                        <a class="align-items-center d-flex justify-content-center" href="https://wa.me/7358728170" target="_blank" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center" style="justify-content: center;">
                                <span class="icon icon-whatsapp mr-3" style="width: 48px;height: 48px;padding: 0px 0px 0.14px 0px;gap: 0px;opacity: 0px;color: #016426;"></span>
                                <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;text-align: left;">Reach us on WhatsApp</p>
                            </div>
                        </a>
                    </div>

                    <!-- Call Us Link -->
                    <div class="col-sm-12 col-md-4 mb-3 mb-md-0" style="text-align: center;">
                        <a href="tel:9746222668" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center" style="justify-content: center;">
                                <span class="icon icon-phone mr-3" style="width: 46.68px;height: 46.69px;gap: 0px;opacity: 0px;"></span>
                                <div class="text">
                                    <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;text-align: left;">Call us today</p>
                                    <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;text-align: left;">+91 97462 22668</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Book Appointment Link -->
                    <div class="col-sm-12 col-md-4" style="text-align: center;">
                        <a href="{{ route('contact-us') }}" style="text-decoration: none;">
                            <div class="d-flex quick-info-2 align-items-center" style="justify-content: center;">
                                <span class="icon icon-home mr-3" style="width: 41.59px;height: 41.59px;gap: 0px;opacity: 0px;"></span>
                                <p class="lead m-0" style="font-family: Rubik;font-size: 20px;font-weight: 800;line-height: 23.7px;text-align: left;">Book an appointment</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- our location  --}}
    <div class="site-section block-services-1" style="background-image: url('http://localhost/allergy-test/public/images/whatsapp/Group35.png');">
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