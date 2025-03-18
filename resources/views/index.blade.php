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
    <title>Martyn CV - Resume / CV / Portfolio & vCard HTML5 Template</title>
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

<body data-spy="scroll" data-target=".navbar-nav" data-offset="110">
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
    <header class="header_wrap fixed-top light_skin hover_menu_style2 transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll" href="#home_section">
                    <img class="logo_light" src="{{asset('template/assets/images/logo_white.png')}}" alt="logo" />
                    <img class="logo_dark" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                    <img class="logo_default" src="{{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <a class="navbar-brand page-scroll" href="#home_section">
                        <img class="logo_light" src="" {{asset('template/assets/images/logo_white.png')}}" alt="logo" />
                        <img class="logo_dark" src="" {{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                        <img class="logo_default" src="" {{asset('template/assets/images/logo_dark.png')}}" alt="logo" />
                    </a>
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link active page-scroll" href="#home_section">Home</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#experience">Experience</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#blog">blog</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#contact">contact</a>
                        </li>

                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
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
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-dark.html">blog
                                            detail dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-sidemenu-dark.html">blog detail sidemenu dark</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-sidemenu-white.html">blog detail sidemenu white</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="blog-detail-white.html">blog
                                            detail white</a>
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

    <!-- START SECTION BANNER -->
    <section id="home_section" class="banner_section full_screen background_bg fixed_bg overlay_bg_blue_80" data-img-src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1631&auto=format&fit=crop">
        <!-- <div class="wave_shape">
        <img src="template/assets/images/wave_shape.png" alt="wave_shape" />
      </div> -->
        <div class="banner_slide_content">
            <div class="container">
                <!-- STRART CONTAINER -->
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="banner_content text-center text_white">
                            <h2 class="animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                Solusi Engineering untuk Masa Depan Indonesia
                            </h2>
                            <!-- <div id="typed-strings" class="d-none">
                  <b>UI/UX Designer</b> <b>Web Developer</b>
                </div> -->
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="font-size: 18px !important">
                                Konsultan engineering profesional dengan pengalaman lebih dari
                                30 tahun dalam perencanaan infrastruktur dan manajemen proyek.
                                <!-- <span id="typed-text" class="text_default"></span> -->
                            </h4>
                            <a href="#" class="btn btn-default rounded-0 animation" data-animation="fadeInUp" data-animation-delay="0.05s">Download CV</a>
                            <a href="#" class="btn btn-outline-white rounded-0 animation" data-animation="fadeInUp" data-animation-delay="0.05s">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTAINER-->
        </div>
        <a href="#about" class="down down_white page-scroll">
            <span class="mouse"><span></span></span>
        </a>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION ABOUT US -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about_img3 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <img src="https://placehold.co/500x500" alt="about_img3" />

                        <div class="border_shape2"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_info animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="heading_s1 mb-3">
                            <h2>About Us</h2>
                        </div>
                        <p>
                            <span><b> PT Andalan Rereka Consultindo</b> </span> telah
                            berdiri sebagai perusahaan konsultan engineering terkemuka di
                            Indonesia selama lebih dari 30 tahun. Berkantor pusat di Jakarta
                            Selatan, kami telah menyelesaikan ratusan proyek infrastruktur
                            dan teknik di seluruh Indonesia.
                        </p>
                        <p>
                            Dengan tim profesional yang berpengalaman dan bersertifikasi,
                            kami berkomitmen untuk memberikan solusi engineering yang
                            inovatif, efisien, dan berkelanjutan.
                        </p>
                        <hr />
                        <div class="heading_s1 mb-4">
                            <h5 class="fw-bold">Our Core Foundations</h5>
                        </div>

                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="icon-bg bg-light text-primary rounded-circle d-flex justify-content-center align-items-center flex-shrink-0 p-3">
                                <i class="ti ti-target fs-4"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold fs-5">Vision</h6>
                                <p class="mb-0 text-muted">
                                    Becoming a global leader in innovative investments and
                                    strategic partnerships.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="icon-bg bg-light text-primary rounded-circle d-flex justify-content-center align-items-center flex-shrink-0 p-3">
                                <i class="ti ti-target fs-4"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold fs-5">Mission</h6>
                                <p class="mb-0 text-muted">
                                    Creating value for our investors while driving positive
                                    change in the industries we serve.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 align-items-start">
                            <span class="icon-bg bg-light text-primary rounded-circle d-flex justify-content-center align-items-center flex-shrink-0 p-3">
                                <i class="ti ti-target fs-4"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold fs-5">Values</h6>
                                <p class="mb-0 text-muted">
                                    Integrity, Innovation, Collaboration, and Sustainability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT US -->

    <!-- START SECTION SERVICES -->
    <section id="services" class="bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation text-center" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Services</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                        blandit massa enim. Nullam id varius nunc id varius nunc.
                    </p>
                </div>
            </div>
            <style>
                .icon_box_content {
                    min-height: 160px;
                    /* Sesuaikan dengan kebutuhan */
                    display: flex;
                    flex-direction: column;
                    /* justify-content: space-between; */
                }

            </style>

            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-image"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Regional and City Planning Consultant</h5>
                            <p>
                                Detailed Spatial Planning, Master Planning, Zoning and Land
                                Use Regulation, Transportation Planning, Infrastructure
                                Planning
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-video-camera"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Civil Engineering</h5>
                            <p>
                                Infrastructure development, transportation systems, and urban
                                planning.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-crown"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Water Resources Engineering</h5>
                            <p>
                                Water supply systems, irrigation, hydropower projects, and
                                environmental management.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-light-bulb"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Structural Engineering</h5>
                            <p>Analysis and design of buildings and complex structures.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Environmental Engineering</h5>
                            <p>
                                Sustainable solutions for waste management, pollution control,
                                and resource conservation.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="icon_box icon_box_style_3 radius_box_10">
                        <div class="box_icon mb-3">
                            <i class="ti-camera"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Architecture</h5>
                            <p>
                                Design and Planning, Master Plan, Detailed Engineering Design,
                                Landscape Architecture.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION COUNTER -->
    <section class="counter_wrap background_bg overlay_bg_blue_70 fixed_bg" data-img-src="template/assets/images/counter_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <i class="flaticon-briefing"></i>
                        <h3 class="counter_text"><span class="counter">800</span>+</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        <i class="flaticon-laugh"></i>
                        <h3 class="counter_text"><span class="counter">524</span></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <i class="flaticon-coffee-cup"></i>
                        <h3 class="counter_text"><span class="counter">654</span></h3>
                        <p>Cup Of Tea</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                        <i class="flaticon-trophy"></i>
                        <h3 class="counter_text"><span class="counter">225</span></h3>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER -->

    <!-- START SECTION PORTFOLIO -->
    <section id="portfolio" class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>My Portfolio</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                        blandit massa enim. Nullam id varius nunc id varius nunc.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cleafix small_divider"></div>
                </div>
            </div>
            <div class="row mb-4 mb-md-5">
                <div class="col-md-12 text-center">
                    <ul class="list_none grid_filter animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <li><a href="#" class="current" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".branding">Branding</a></li>
                        <li><a href="#" data-filter=".web-design">Web Design</a></li>
                        <li><a href="#" data-filter=".development">Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid_container gutter_medium work_col3 portfolio_gallery portfolio_style1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <!-- <li class="grid-sizer"></li> -->
                        <!-- START PORTFOLIO ITEM -->
                        @foreach($projects as $project)
                            <li class="grid_item {{ strtolower($project->category) }}">
                                <div class="portfolio_item">
                                    <a href="#" class="image_link">
                                        @if($project->images->isNotEmpty()) 
                                            <img src="{{ asset('storage/' . $project->images->first()->image_path) }}" alt="image"
                                                style="width: 320px; height: 200px; object-fit: cover; border-radius: 5px;">
                                        @else
                                            <img src="{{ asset('template/assets/images/portfolio_item_small1.jpg') }}" alt="No Image"
                                                style="width: 320px; height: 200px; object-fit: cover; border-radius: 5px;">
                                        @endif
                                    </a>
                                    <div class="portfolio_content">
                                        <div class="link_container">
                                            @if($project->images->isNotEmpty())
                                                <a href="{{ asset('storage/' . $project->images->first()->image_path) }}" class="image_popup">
                                                    <i class="ion-image"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('projects.detail', $project->id) }}"><i class="ion-plus"></i></a>
                                        </div>
                                        <h5>
                                            <a href="{{ route('projects.detail', $project->id) }}">{{ $project->name }}</a>
                                        </h5>
                                        <p>{{ $project->category }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        <!-- END PORTFOLIO ITEM -->
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- END SECTION PORTFOLIO -->

    <!-- START TEAM  -->
    <!-- Team 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center" style="font-weight: 700">
                        Our Team
                    </h2>
                    <p class="text-secondary mb-5 text-center lead fs-4">
                        We are a group of innovative, experienced, and proficient teams.
                        You will love to collaborate with us.
                    </p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle" />
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0 gx-xxl-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://placehold.co/500x500" alt="Flora Nyra" />
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Flora Nyra</h4>
                                    <p class="text-secondary mb-0">Product Manager</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://placehold.co/500x500" alt="Evander Mac" />
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Evander Mac</h4>
                                    <p class="text-secondary mb-0">Art Director</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://placehold.co/500x500" alt="Taytum Elia" />
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Taytum Elia</h4>
                                    <p class="text-secondary mb-0">Investment Planner</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://placehold.co/500x500" alt="Wylder Elio" />
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Wylder Elio</h4>
                                    <p class="text-secondary mb-0">Financial Analyst</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WORK  -->

    <!-- START SECTION BLOG -->
    <section id="blog" class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>My Letest Blog</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                        blandit massa enim. Nullam id varius nunc id varius nunc.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="clearfix small_divider"></div>
                </div>
            </div>
            <div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="template/assets/images/blog_small_img1.jpg" alt="blog_small_img1" />
                            </a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <div class="post_category"><a href="#">UI/UX Design</a></div>
                                <h5 class="blog_title">
                                    <a href="#">Look Up At The Innovative Ways Team Work </a>
                                </h5>
                                <ul class="list_none blog_meta">
                                    <li>
                                        <a href="#"><i class="ion-calendar"></i>April 14, 2018</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-chatboxes"></i>2 Comment</a>
                                    </li>
                                </ul>
                                <p>
                                    If you are going to use a passage of Lorem Ipsum, you need
                                    to be sure there isn't anything embarrassing hidden in the
                                    middle of text
                                </p>
                                <a href="#" class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="template/assets/images/blog_small_img2.jpg" alt="blog_small_img2" />
                            </a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <div class="post_category"><a href="#">Branding</a></div>
                                <h5 class="blog_title">
                                    <a href="#">How To Create A Website For Your Business?</a>
                                </h5>
                                <ul class="list_none blog_meta">
                                    <li>
                                        <a href="#"><i class="ion-calendar"></i>April 14, 2018</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-chatboxes"></i>2 Comment</a>
                                    </li>
                                </ul>
                                <p>
                                    Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making this the first true generator on
                                    the Internet.
                                </p>
                                <a href="#" class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="template/assets/images/blog_small_img3.jpg" alt="blog_small_img3" />
                            </a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <div class="post_category"><a href="#">Developing</a></div>
                                <h5 class="blog_title">
                                    <a href="#">How To Perfect You Get Free expensive Directories</a>
                                </h5>
                                <ul class="list_none blog_meta">
                                    <li>
                                        <a href="#"><i class="ion-calendar"></i>April 14, 2018</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-chatboxes"></i>2 Comment</a>
                                    </li>
                                </ul>
                                <p>
                                    It uses a dictionary of over combined with a handful of
                                    model sentence structures, to generate Lorem Ipsum which
                                    looks reasonable
                                </p>
                                <a href="#" class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- START SECTION CONTACT -->
    <section id="contact" class="bg-light">
        <section class="py-1">
            <div class="container">
                <div class="row justify-content-center text-center mb-3">
                    <div class="col-lg-8 col-xxl-7">
                        <span class="text-muted">Let's Talk</span>
                        <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
                        <p class="lead">
                            Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta, quos
                            nemo minima nulla ducimus officii nulla ducimus officiis! Lorem
                            ipsum dolor, sit amet elit Quamnitm.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <h5 class="fw-semibold mb-3">Send us a message</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="First name" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="Last name" type="text" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="Email address" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
                            </div>
                            <div class="col-md-4 ms-auto">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">
                                        Send message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <div class="mb-4">
                            <h5>Address</h5>
                            <p>123 Mountain View, California, United States.</p>
                        </div>
                        <div class="mb-4">
                            <h5>Phone</h5>
                            <p>+1 123-456-7890</p>
                        </div>
                        <div class="mb-4">
                            <h5>Email</h5>
                            <p>hello@yourdomain.com</p>
                        </div>
                        <div class="mb-4">
                            <h5>Socials</h5>
                            <a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z">
                                    </path>
                                </svg></a>
                            <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                    </path>
                                </svg></a>
                            <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                    </path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- START SECTION CONTACT -->

    <!-- START FOOTER SECTION -->
    <footer class="footer_dark bg_black4">
        <div class="top_footer small_pb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-9 text-center">
                        <div class="footer_logo">
                            <a href="index.html"><img alt="logo" src="template/assets/images/logo_white.png" /></a>
                        </div>
                        <h6 class="widget_title pt-3">Subscribe Our Newsletter</h6>
                        <div class="newsletter_form newslattter_small">
                            <form>
                                <input type="text" required="" placeholder="Enter Email Address" />
                                <button type="submit" title="Subscribe" class="btn btn-default rounded-0" name="submit" value="Submit">
                                    subscribe
                                </button>
                            </form>
                        </div>
                        <ul class="list_none footer_link text-center footer_nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Experience</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="list_none social_icons social_white pt-4">
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-googleplus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-youtube-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer bg_black2">
            <div class="container">
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
    <!-- jquery.parallax-scroll js -->
    <script src="{{asset('template/assets/js/jquery.parallax-scroll.js')}}"></script>
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
