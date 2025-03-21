<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Anil z" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Creating a professional, modern and sophisticated online resume website is easy with Martyn CV / Resume" />
    <meta name="keywords" content="CV, resume, card, vcard, online cv, online resume, professional resume, portfolio, one page, bootstrap responsive, creative html template, creative design, parallax, personal" />

    <!-- SITE TITLE -->
    <title>
        Martyn CV - Resume / CV / Portfolio & vCard HTML5 Template
    </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/favicon.png')}}" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/animate.css')}}" />
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/bootstrap/css/bootstrap.min.css')}}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('template/assets/css/themify-icons.css')}}" />
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/all.min.css')}}" />
    <!-- Flaticon Font CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/flaticon.css')}}" />
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('template/assets/owlcarousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('template/assets/owlcarousel/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('template/assets/owlcarousel/css/owl.theme.default.min.css')}}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/magnific-popup.css')}}" />
    <!-- Scrollbar Css -->
    <link rel="stylesheet" href="{{asset('template/assets/css/jquery.mCustomScrollbar.min.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('template/assets/css/responsive.css')}}" />
</head>

<body>
    <!-- LOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner ball-scale">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top dark_skin hover_menu_style3 transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll" href="{{url('/')}}#home_section">
                    <img class="logo_light" src="{{asset('template/assets/images/logo_white.png')}}" alt="logo" />
                    <img class="logo_dark" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                    <img class="logo_default" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <a class="navbar-brand page-scroll" href="#home_section">
                        <img class="logo_light" src="{{asset('template/assets/images/logo_white.png')}}" alt="logo" />
                        <img class="logo_dark" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                        <img class="logo_default" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                    </a>
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#home_section">Home</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#services">Services</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#experience">Experience</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#blog">blog</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="{{url('/')}}#contact">contact</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle active nav-link" href="#" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="portfolio-detail-dark.html">portfolio detail dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="portfolio-detail-sidemenu-dark.html">portfolio detail sidemenu
                                            dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="portfolio-detail-sidemenu-white.html">portfolio detail sidemenu
                                            white</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="portfolio-detail-white.html">portfolio detail white</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-dark.html">blog detail dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-sidemenu-dark.html">blog detail sidemenu dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-sidemenu-white.html">blog detail sidemenu white</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item active" href="blog-detail-white.html">blog detail white</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- START HEADER -->

    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Project Detail</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION PORTFOLIO DETAIL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="carousel_slider owl-carousel owl-theme"
                        data-margin="20" data-dots="false" data-loop="true" data-nav="true" data-autoplay="true" data-items="1">
                        
                        @if($project->images->isNotEmpty()) 
                            @foreach($project->images as $image)
                                <div class="item">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $project->name }}" />
                                </div>
                            @endforeach
                        @else
                            <div class="item">
                                <img src="{{ asset('template/assets/images/portfolio_img1.jpg') }}" alt="No Image" />
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-lg-4">
                    <ul class="list_none portfolio_info_box">
                        <li><span class="text-uppercase">Nama Project</span> {{ $project->name }}</li>
                        <li><span class="text-uppercase">Client</span> {{ $project->client }}</li>
                        <li><span class="text-uppercase">Date</span> {{ \Carbon\Carbon::parse($project->date)->format('d M Y') }}</li>
                        <li><span class="text-uppercase">Category</span> {{ str_replace(' ', ', ', $project->category) }}</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="pf_content">
                        <div class="heading_s1">
                            <h2>{{ $project->name }}</h2>
                        </div>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END SECTION PORTFOLIO DETAIL -->

    <!-- START FOOTER SECTION -->
    <footer class="bg_gray">
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer_logo">
                            <a href="{{url('/')}}"><img alt="logo" src="{{asset('template/assets/images/logo_dark.png')}}" /></a>
                        </div>
                        <h6 class="widget_title pt-3">
                            Subscribe Our Newsletter
                        </h6>
                        <div class="newsletter_form newslattter_small">
                            <form>
                                <div class="outline_input-black">
                                    <input type="text" required="" placeholder="Enter Email Address" />
                                </div>
                                <button type="submit" title="Subscribe" class="btn btn-default rounded-0 btn-aylen" name="submit" value="Submit">
                                    subscribe
                                </button>
                            </form>
                        </div>
                        <ul class="list_none social_icons pt-4">
                            <li>
                                <a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a>
                            </li>
                            <li>
                                <a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom_footer border-top">
                        <div class="row">
                            <div class="col-12">
                                <p class="copyright m-0 text-center">
                                    © 2019 All Rights Reserved By
                                    <a href="#" class="text_default">Bestwebcreator</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="#" class="scrollup" style="display: none"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{asset('template/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!-- jquery-ui -->
    <script src="{{asset('template/assets/js/jquery-ui.js')}}"></script>
    <!-- popper min js -->
    <script src="{{asset('template/assets/js/popper.min.js')}}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{asset('template/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{asset('template/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{asset('template/assets/js/magnific-popup.min.js')}}"></script>
    <!-- waypoints min js  -->
    <script src="{{asset('template/assets/js/waypoints.min.js')}}"></script>
    <!-- parallax js  -->
    <script src="{{asset('template/assets/js/parallax.js')}}"></script>
    <!-- countdown js  -->
    <script src="{{asset('template/assets/js/jquery.countdown.min.js')}}"></script>
    <!-- jquery.counterup.min js -->
    <script src="{{asset('template/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- imagesloaded js -->
    <script src="{{asset('template/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- isotope min js -->
    <script src="{{asset('template/assets/js/isotope.min.js')}}"></script>
    <!-- vanilla-tilt.babel.min js -->
    <script src="{{asset('template/assets/js/vanilla-tilt.babel.min.js')}}"></script>
    <!-- typed.min js -->
    <script src="{{asset('template/assets/js/typed.min.js')}}"></script>
    <!-- typed text js -->
    <script src="{{asset('template/assets/js/typed-text.js')}}"></script>
    <!-- mCustomScrollbar.concat.min js -->
    <script src="{{asset('template/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- scripts js -->
    <script src="{{asset('template/assets/js/scripts.js')}}"></script>
</body>
</html>
