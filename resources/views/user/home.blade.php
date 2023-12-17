<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>Imperial Hotel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/IMPERIAL LOGO.png') }}">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Poppins dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./assets/css/poppins.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar fixed-top navbar-expand-lg navbar-scroll">
            <div class="container-fluid">
                <a href="{{ asset('/') }}" class="navbar-brand d-flex align-items-center px-3 py-2">
                    <img src="{{ asset('img/IMPERIAL HOTEL.png') }}" alt="Logo"
                        class="imperial-logo d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0 mb-2">
                        <li class="nav-item mx-3">
                            <a class="nav-link" aria-current="page" href="{{ asset('/') }}">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ asset('/about') }}">About us</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ asset('/room') }}">Kamar</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ asset('/profile') }}">Profile</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="btn btn-danger" href="{{ route('actionLogout') }}" role="button"
                                style="border:none;">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- banner -->
        <section class="banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-bg">
                            <div class="padding_lert">
                                <h1>WELCOME TO </h1>
                                <span>IMPERIAL HOTEL</span>
                                <p> Tempat di Mana Kehangatan dan Kemewahan Menjadi Satu Pengalaman yang Abadi, Layanan
                                    Terbaik untuk Kenangan Terbaik, Nikmati Kemewahan Tanpa Batas di Jantung Kota!</p>
                            </div>
                            <a class="btn book_btn" href="{{ asset('/buatBooking') }}" role="button">Book Now !</a>s
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <!-- end form_lebal -->

        <div class="container">

            <!-- Featurettes -->
            <div class="row featurette mt-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal">
                        Hotel pertama dan satu-satunya <strong>yang cozy</strong>.
                    </h2>
                    <p class="lead">
                        Kami menawarkan pengalaman yang berbeda dari hotel lainnya, Nikmati ritme dan atmosfer dari
                        hotel kami yang penuh energi dan gaya.
                    </p>
                </div>
                <div class="col-md-5">

                    <img src="{{ asset('img/gallery-img-4.webp') }}"
                        class="featurette-image img-fluid mx-auto rounded shadow" role="img"
                        aria-label="Gambar featurette 1" focusable="false" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal">
                        Your comfort is key, <strong>Rasakanlah sensasi dan petualangan yang berbeda.</strong>.
                    </h2>
                    <p class="lead">
                        Kami menyediakan kamar-kamar yang modern dan mewah yang dirancang untuk memberikan Anda
                        kenyamanan optimal, teknologi mutakhir, dan detail yang menawan
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('img/home-img-3.jpg') }}"
                        class="featurette-image img-fluid mx-auto rounded shadow" role="img"
                        aria-label="Gambar featurette 2" focusable="false" />
                </div>
            </div>
        </div>

        <!-- /.content-wrapper -->
        <!--  footer -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-5">
                            <h3>Contact US</h3>
                            <ul class="conta">
                                <li><i class="fa-solid fa-location-dot"" aria-hidden=" true"></i> Jl. Bener No.20,
                                    Kota Yogyakarta, 55243
                                </li>
                                <li><i class="fa-solid fa-phone" aria-hidden="true"></i> +62 85171703304</li>
                                <li> <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                    imperialhotel@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>Menu Link</h3>
                            <ul class="link_menu">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="{{ asset('/about') }}"> About us</a></li>
                                <li><a href="{{ asset('/room') }}">Kamar</a></li>
                                <li><a href="{{ asset('/profile') }}">Profile</a></li>
                                <li><a href="{{ asset('/loginAdmin') }}">Admin</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>Follow Us</h3>
                            <img align="left" src="{{ asset('img/IMPERIAL LOGO.png') }}" alt="Logo"
                                class="imperial-footer">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <p><strong>Copyright &copy; {{ date('Y') }} <a href="#">Imperial</a>.
                                    </strong> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap 5.3 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    nav.style.backgroundColor = '#3469c2';
                    nav.classList.add('shadow');
                } else {
                    nav.style.backgroundColor = '';
                    nav.classList.remove('shadow');
                }
            });
        </script>
</body>
