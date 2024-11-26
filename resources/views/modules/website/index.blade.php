<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stem SSP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon_11.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <script src="{{ asset('js/main.js') }}?v={{ time() }}"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />


</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    {{-- <p><span>+880166 253 232</span> <span>info@stem-ssp.com</span></p> --}}
                                </div>
                                <div class="text_wrap">
                                    <p><a href="{{ route('login') }}"> <i class="ti-user"></i> Sign In</a>
                                        {{-- <a
                                            href="{{ route('register') }}">Register</a></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="/">
                                            {{-- style="width: 100px" --}}
                                            <img src="img/logo_212.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="/">home</a></li>
                                                <li><a href="#">Courses</a></li>
                                                {{-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">blog</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="Event.html">Event</a></li>
                                                        <li><a href="event_details.html">Event Details</a></li>
                                                        <li><a href="Admissions.html">Admissions</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li><a href="#">Contact</a></li>
                                                <li> <a href="#application-form">Apply Now</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a href="#application-form">Apply Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" data-aos="flip-left" data-aos-duration="1200">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Your gateway <br>
                                    to enrolling <br> in STEM <br>
                                </h3>
                                <a href="#application-form" class="boxed-btn3">Get Started</a>
                                {{-- <a href="#" class="boxed-btn4">How It Works</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Your gateway <br>
                                    to enrolling <br> in STEM <br>
                                </h3>
                                <a href="#application-form" class="boxed-btn3">Get Started</a>
                                {{-- <a href="#" class="boxed-btn4">How It Works</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Your gateway <br>
                                    to enrolling <br> in STEM <br>
                                </h3>
                                <a href="#application-form" class="boxed-btn3">Get Started</a>
                                {{-- <a href="#" class="boxed-btn4">How It Works</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
        </div>
    </div> <br><br>
    <!-- slider_area_end -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- service_area_start  -->
    <div class="custom_service_area" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div>
                    <p class="custom_paragraph" data-aos="fade-right">
                        STEM education integrates four disciplines<span style="margin-left: 20px" class="highlight">Science</span>, <span
                        class="highlight">Technology</span>, <span class="highlight">Engineering</span>, and <span
                            class="highlight">Mathematics</span> into a cohesive learning model.
                    </p> <br>
                    <p class="custom_paragraph" data-aos="fade-left">
                        It goes beyond textbook knowledge, blending theory with practical, real-world applications.
                    </p>
                    <p class="custom_paragraph" data-aos="fade-up">
                        Through collaborative projects, hands-on experiments, and interdisciplinary learning, students
                        discover how these fields intersect and drive innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding" data-aos="fade-up" data-aos-duration="800"
        data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        {{-- <h3>Popular Program</h3> --}}
                    </div>
                </div>
            </div><br><br>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate                                </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PHD Scholarships</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Training</a>
                        </div>
                    </nav>
                </div>
            </div> --}}
            <div class="tab-content" id="nav-tabContent" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra_STEM2.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Unlocking Problem-Solving Potential</span> --}}
                                    <h4>Unlocking Problem-Solving Potential</h4>
                                    <p>STEM education teaches students how to approach challenges logically and
                                        methodically. Whether designing an energy-efficient car or solving a complex
                                        mathematical equation, students develop skills to think critically and find
                                        solutions to problems—skills they will use for life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1200">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra_STEM3.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Agriculture</span> --}}
                                    <h4>Preparing for Future Careers</h4>
                                    <p>The world is changing, and so is the job market. Careers in STEM fields are among
                                        the most lucrative and in-demand globally, with professions ranging from data
                                        scientists to aerospace engineers. STEM education equips students with the
                                        skills and knowledge to thrive in these high-growth industries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-down-right" data-aos-duration="1500">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra _STEM.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Agriculture</span> --}}
                                    <h4>Encouraging Creativity and Innovation</h4>
                                    <p>STEM isn’t just about solving problems—it’s about thinking creatively to
                                        innovate. Whether it’s building a robot or developing a mobile app, STEM
                                        inspires students to experiment, prototype, and turn their ideas into reality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="300">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra_STEM2.jpeg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Agriculture</span> --}}
                                    <h4>Promoting Inclusivity and Diversity</h4>
                                    <p>STEM education breaks down barriers by providing opportunities for everyone,
                                        regardless of gender, ethnicity, or background. By encouraging participation
                                        from underrepresented groups, STEM ensures a diverse and inclusive workforce
                                        capable of tackling global challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="300">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra _STEM.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Agriculture</span> --}}
                                    <h4>Building Teamwork and Communication Skills</h4>
                                    <p>Collaboration is at the heart of STEM education. Students work together on
                                        projects, learning to communicate effectively and respect diverse perspectives.
                                        These skills are invaluable not just in STEM careers but in all aspects of life.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="300">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/stem/Accra_STEM2.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- <span>Agriculture</span> --}}
                                    <h4>Nurturing Curiosity and Lifelong Learning</h4>
                                    <p>STEM education ignites curiosity. It encourages students to ask questions,
                                        explore the unknown, and develop a love for discovery. This mindset fosters
                                        lifelong learning, ensuring students remain adaptable and innovative throughout
                                        their lives.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Chemical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Mechanical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/2.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Bio engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Chemical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/2.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Mechanical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Bio engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#application-form" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/2.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Chemical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Mechanical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Bio engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="#application-form" class="boxed-btn4">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- latest_coures_area_start  -->
    <div class="latest_coures_area" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Why Choose STEM?</h3>
                                <p>With STEM, we believe every student has the potential to be a change-maker. Our
                                    programs are designed to inspire, challenge, and prepare students for a dynamic
                                    future. Here’s what sets us apart: <br>
                                    • Hands-On Learning Experiences: Our curriculum focuses on real-world applications,
                                    ensuring students gain practical skills. <br>
                                    • Expert Guidance: Our dedicated educators and mentors bring years of experience and
                                    a passion for teaching. <br>
                                    • Inclusive Opportunities: We strive to make STEM accessible to all, creating a
                                    supportive and diverse learning environment.</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">
                                    <div>
                                        <h3 style="color: white">What Our Community Says</h3>
                                    </div>
                                    <h4>"STEM education has completely transformed my child’s learning experience.
                                        They’ve gained skills, confidence, and a passion for science that I’ve never
                                        seen before!"</h4>
                                    <i style="color:white">Aisha A., Parent</i> <br><br>
                                    {{-- <a href="#application-form" class="boxed-btn5">Apply NOw</a> --}}
                                </div>
                                <div class="single_wrap">
                                    {{-- <div >
                                        <h3 style="color: white">What Our Community Says</h3>
                                    </div> --}}
                                    <br>
                                    <h4>"The hands-on projects and expert mentorship at STEM prepared me for university
                                        and gave me a head start in my engineering degree."</h4>
                                    <i style="color:white">Kwame A., Former Student</i> <br><br>
                                    {{-- <a href="#application-form" class="boxed-btn5">Apply NOw</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->

    <!-- recent_event_area_strat  -->
    <div class="recent_event_area section__padding" data-aos="flip-left" data-aos-duration="1200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Join the STEM Movement Today</h3>
                        <p>Are you ready to unlock the potential within you or your child? STEM education is the key to
                            a world of opportunities, innovation, and impact. At STEM-SSP, we’re committed to guiding
                            students every step of the way.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>03</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>Sign Up for a STEM-SSP Program</h4>
                            </a>
                            <p>Empower yourself or your child with the tools to innovate and succeed in the 21st
                                century.</p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>17</span>
                            <p>Dec, 2024</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p>Discover hands-on workshops that cover robotics, coding, engineering design, and more.</p>
                        </div>
                    </div>

                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>10</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>Contact Us:</h4>
                            </a>
                            <p>Got questions? Reach out to our team at info@stem-ssp.com or call us at +233-XXX-XXX-XXX.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- recent_event_area_end  -->


    <!-- latest_coures_area_start  -->
    <div id="application-form" data-scroll-index="1" class="admission_area" data-aos="fade"
        data-aos-duration="1000">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <div class="admission_form">
                            <h3>Enroll to STEM</h3>
                            <form action="{{ route('apply') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="first_name" placeholder="First Name"
                                                required>
                                        </div>
                                    </div>
                                    <!-- Middle Name -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="middle_name" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="tel" name="phone_number" placeholder="Phone Number"
                                                required>
                                        </div>
                                    </div>
                                    <!-- Index Number -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="index_number"
                                                placeholder="10 Digits Index Number" required maxlength="10">
                                        </div>
                                    </div>
                                    <!-- Date of Birth -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="date_of_birth" class="dob-input"
                                                placeholder="Date of Birth (MM/DD/YYYY)" required>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="date_of_birth" placeholder="Date of Birth" required>
                                        </div>
                                    </div> --}}


                                    <!-- Schools -->
                                    {{-- <div class="col-md-6">
                                        <div class="single_input custom-multi-select">
                                            <div class="custom-select-box">
                                                <span class="placeholder">Select up to two schools</span>
                                                <div class="selected-items"></div>
                                                <ul class="dropdown-options">
                                                    @foreach ($schools as $school)
                                                        <li data-value="{{ $school->id }}">
                                                            {{ $school->sch_name }} ({{ $school->gender }}) REGION:
                                                            {{ $school->region }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <input type="hidden" name="schools[]" class="hidden-input">
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="single_input">
                                            {{-- <label for="school">Selected School</label> --}}
                                            <input type="text" id="school" value="{{ $schools[0]->sch_name }} "
                                                readonly class="form-control">
                                            <!-- Hidden input to send the school ID as part of the schools array -->
                                            <input type="hidden" name="schools[]" value="{{ $schools[0]->id }}">
                                        </div>
                                    </div>


                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="email" name="email" placeholder="Email Address"
                                                required>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <button class="boxed-btn3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->


    <!-- recent_news_area_start  -->
    <div class="recent_news_area section__padding" data-aos="fade-down-right" data-aos-duration="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Take the first step toward a brighter future! Enroll Now</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="img/stem/stem-8.jpeg" alt="">
                            </a>
                            <span class="badge">Group Study</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Our curriculum focuses on real-world applications</h4>
                            </a>
                            {{-- <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10,
                                    2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="/">
                                <img src="img/stem/stem-6.jpeg" alt="">
                            </a>
                            <span class="badge bandge_2">Class Life</span>
                        </div>
                        <div class="news_info">
                            <a href="/">
                                <h4>Our dedicated educators and mentors bring years of experience and a passion for
                                    teaching.</h4>
                            </a>
                            {{-- <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10,
                                    2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent_news_area_end  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Study
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This website is made with <i
                                class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank"> <span style="color: white">Stem SSP</span></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <!-- JS here -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.custom-select').select2({
                placeholder: "Select up to two schools",
                maximumSelectionLength: 2, // Allow selecting up to two schools
                width: '100%' // Make it responsive
            });
        });

        // Restrict index number input to 10 digits
        document.querySelector('input[name="index_number"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });

        document.addEventListener("DOMContentLoaded", () => {
            const selectBox = document.querySelector(".custom-select-box");
            const dropdownOptions = selectBox.querySelector(".dropdown-options");
            const selectedItemsContainer = selectBox.querySelector(".selected-items");
            const hiddenInput = document.querySelector(".hidden-input");

            const maxSelection = 2;

            // Toggle dropdown visibility
            selectBox.addEventListener("click", () => {
                selectBox.classList.toggle("active");
            });

            // Select option logic
            dropdownOptions.addEventListener("click", (e) => {
                if (e.target.tagName === "LI") {
                    const selectedValue = e.target.getAttribute("data-value");
                    const selectedText = e.target.textContent;

                    // Check if already selected
                    const existingSelection = selectedItemsContainer.querySelector(
                        `[data-value="${selectedValue}"]`
                    );
                    if (existingSelection) return;

                    // Limit selection
                    if (selectedItemsContainer.children.length >= maxSelection) {
                        alert(`You can only select up to ${maxSelection} schools.`);
                        return;
                    }

                    // Add selected item
                    const selectedSpan = document.createElement("span");
                    selectedSpan.setAttribute("data-value", selectedValue);
                    selectedSpan.innerHTML = `${selectedText} <span class="remove-item">&times;</span>`;
                    selectedItemsContainer.appendChild(selectedSpan);

                    // Update hidden input
                    updateHiddenInput();

                    // Remove item logic
                    selectedSpan.querySelector(".remove-item").addEventListener("click", () => {
                        selectedSpan.remove();
                        updateHiddenInput();
                    });
                }
            });

            // Close dropdown if clicked outside
            document.addEventListener("click", (e) => {
                if (!selectBox.contains(e.target)) {
                    selectBox.classList.remove("active");
                }
            });

            // Update hidden input
            function updateHiddenInput() {
                const selectedValues = Array.from(
                    selectedItemsContainer.querySelectorAll("span[data-value]")
                ).map((item) => item.getAttribute("data-value"));

                console.log("Selected schools being sent:", selectedValues); // Debug log
                hiddenInput.value = JSON.stringify(selectedValues); // Correct format
            }

        });

        document.addEventListener("DOMContentLoaded", () => {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


    <script>
        window.addEventListener('load', function() {
            AOS.init(); // Initialize AOS after load
        });

        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            const curtainContainer = document.getElementById('curtain-container');
            const app = document.getElementById('app');

            setTimeout(() => {
                preloader.style.display = 'none';
                // Start curtain animation
                curtainContainer.classList.add('reveal');

                setTimeout(() => {
                    curtainContainer.style.display = 'none';
                    app.style.display = 'block';
                    AOS.refresh(); // Refresh AOS
                }, 1000);
            }, 500);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const fadeUpElements = document.querySelectorAll('.fade-up');

            function handleScroll() {
                fadeUpElements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            window.addEventListener('resize', handleScroll);
            handleScroll();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const animations = ['slideIn', 'scaleUp', 'rotate', 'bounce'];

            navItems.forEach((item, index) => {
                const animationClass = `animate-${animations[index % animations.length]}`;
                item.classList.add(animationClass);
                item.style.animationDelay = `${index * 0.1}s`;
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#date_of_birth", {
                dateFormat: "m/d/Y", // Format to match your placeholder
                allowInput: true // Allow manual input
            });
            $(document).ready(function() {
                $('.dob-input').datepicker({
                    format: "mm/dd/yyyy", // Format: MM/DD/YYYY
                    endDate: "today", // Disable future dates
                    autoclose: true, // Close picker after selection
                });
            });

        });
    </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    {{-- <script src="js/vendor/jquery-1.12.4.min.js"></script> --}}
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    {{-- <script src="js/nice-select.min.js"></script> --}}
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
