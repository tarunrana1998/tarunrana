<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom Css File-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <title>Tarun's Portfolio</title>
</head>
@if (env('APP_ENV') == 'local')

    <body>
    @else

        <body oncontextmenu="return false">
@endif

<!-- =======================================Start Header Area =========================================-->

<header class="header-area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid" style="height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certification">Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<section id="home" class="site-banner m-0 p-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <h3 class="display-6 fw-bold mb-2 text-primary">Hey <span
                        class="text-decoration-underline">there!</span></h3>
                <h1 class="display-5 fw-bold mb-3">I am Tarun Rana</h1>
                <h4 class="text-primary mb-4">FULL STACK DEVELOPER</h4>
                <div class="d-flex flex-column flex-md-row">
                    <a class="btn btn-primary" target="_blank" href="https://www.linkedin.com/in/tarunrana1998/">HIRE ME</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <img src="{{ asset('images/tarun_2.jpg') }}" alt="About me" class="img-fluid rounded shadow-lg"
                    style="max-height: 400px; min-height: 250px;">

            </div>
        </div>
    </div>
</section>
<section id="about" class="container about-area py-5 rounded-3 shadow-lg">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0 text-center">
            <img src="{{ asset('images/tarun_rana.jpg') }}" alt="Tarun Rana" class="img-fluid rounded shadow-lg"
                style="max-height: 400px; min-height: 250px;">

        </div>
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold mb-4">
                {{-- <span class="d-block">LET ME</span>
                <span class="d-block">INTRODUCE</span>
                <span class="d-block">MYSELF</span> --}}
                Introduction
            </h2>
            <p class="mb-3">I am a software engineer, currently working at 91 Digital Pvt Ltd.</p>
            <p class="mb-4">I have worked on frontend and backend for many projects. My area of expertise is
                the LAMP stack. I am expanding my skills in JS frameworks. You can check out my profile on
                <a href="https://wwww.hackerrank.com/tarunrana1998" target="_blank"
                    class="text-decoration-none"><strong>HackerRank</strong></a> or
                <a href="https://www.linkedin.com/in/tarunrana1998/" target="_blank"
                    class="text-decoration-none"><strong>LinkedIn</strong></a>.
            </p>
            <a class="btn btn-outline-primary" href="https://www.google.com" target="_blank"
                style="color: #0069d9; border-color: #0069d9;">Want To Know More</a>
        </div>
    </div>
</section>


<section id="timeline" class="container timeline py-5 rounded-3 shadow-lg">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h2 class="services-title display-5 fw-bold">Work Experience</h2>
            <p class="lead">Given below are the services offered by me. I have been practicing in these areas for
                many years.</p>
        </div>

        <!-- <div class="col-12 text-center mb-5">
                    <p>I have worked on multiple projects like this web portfolio built with <b>HTML5</b>, <b>CSS3</b>, and <b>Bootstrap</b>. Besides, I have experience with Android Studio, Cloud Computing fundamentals, and I am actively practicing competitive coding on HackerRank.</p>
                </div> -->
    </div>
    <div class="timeline_rows">
        <ul>
            <!-- <li style="--accent-color:#41516C">
                    <div class="date">2002</div>
                    <div class="title">Title 1</div>
                    <div class="descr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque hic quibusdam fugiat est numquam harum, accusamus suscipit consequatur laboriosam!</div>
                </li>
                <li style="--accent-color:#FBCA3E">
                    <div class="date">2007</div>
                    <div class="title">Title 2</div>
                    <div class="descr">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos adipisci nobis nostrum vero nihil veniam.</div>
                </li> -->
            <li style="--accent-color:#E24A68">
                <div class="date">July 2022 - Present</div>
                <div class="title">Software Engineer at 91Digitals Pvt Ltd (91mobiles)</div>
                <div class="descr">
                    <!-- <p><strong>-></strong> Left Bytesview Analytics Pvt Ltd and joined 91Digitals as a Software Engineer, working remotely.</p> -->
                    <p><strong>-></strong> Worked with ElasticSearch, contributing to feature development and
                        optimization for the product.</p>
                    <p><strong>-></strong> Managed QA servers, ensuring high-quality software delivery and
                        continuous testing processes.</p>
                    <p><strong>-></strong> Developed and improved features for the product, including enhancing
                        their crawling repository.</p>
                    <p><strong>-></strong> Researched and developed many new features, playing an integral role in
                        product innovation and performance improvements.</p>

                </div>
            </li>
            <li style="--accent-color:#1B5F8C">
                <div class="date">August 2021</div>
                <div class="title">Software Developer at Bytesview Analytics Pvt Ltd </div>
                <div class="descr">
                    <p><strong>-></strong> In , transitioned into a Software Developer role, working as a Full Stack
                        Developer.</p>
                    <p><strong>-></strong> Engaged in both frontend and backend development, leading projects to
                        completion with a focus on scalable solutions.</p>
                    <p><strong>-></strong> Worked with various technologies across the stack, enhancing development
                        skills and improving the quality of web applications.</p>
                </div>
            </li>
            <li style="--accent-color:#4CADAD">
                <div class="date">January 2021</div>
                <div class="title">Internship at Bytesview Analytics Pvt Ltd </div>
                <div class="descr">
                    <p><strong>-></strong> Initially worked on frontend development, utilizing various web
                        technologies.</p>
                    <p><strong>-></strong> Transitioned to backend development, gaining experience with server-side
                        technologies.</p>
                    <!-- <p>-> Contributed to multiple projects, enhancing both frontend and backend skills.</p>
                        <p>->Developed a strong foundation in full-stack development, collaborating with teams to deliver high-quality solutions.</p> -->
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="services" class="container services-area py-5 rounded-3 shadow-lg">
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('images/profile.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/tarun_rana.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/tarun_2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section id="services" class="container services-area py-5 rounded-3 shadow-lg">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h2 class="services-title display-5 fw-bold">Services Area</h2>
            <p class="lead">Given below are the services offered by me. I have been practicing in these areas
                for many years.</p>
        </div>

        <div class="col-12 text-center mb-5">
            <p>I have worked on multiple projects like this web portfolio built with <b>HTML5</b>, <b>CSS3</b>,
                and <b>Bootstrap</b>. Besides, I have experience with Android Studio, Cloud Computing
                fundamentals, and I am actively practicing competitive coding on HackerRank.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Card 1: Web Developer -->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow-sm border-0 rounded h-100 d-flex flex-column">
                <div class="card-body text-center d-flex flex-column">
                    <img src="{{ asset('images/services/web.png') }}" alt="web-development" class="img-fluid mb-3">
                    <h3 class="card-title fw-bold">Web Developer</h3>
                    <p class="mt-auto">The first project I worked on is my portfolio website, built from
                        scratch using web technologies.</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Android Developer -->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow-sm border-0 rounded h-100 d-flex flex-column">
                <div class="card-body text-center d-flex flex-column">
                    <img src="{{ asset('images/services/android1.png') }}" alt="android-development"
                        class="img-fluid mb-3">
                    <h3 class="card-title fw-bold">Android Developer</h3>
                    <p class="mt-auto">I have developed two Android applications using Android Studio, such as
                        Rolling the Dice and a music player app.</p>
                </div>
            </div>
        </div>

        <!-- Card 3: Cloud Computing -->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow-sm border-0 rounded h-100 d-flex flex-column">
                <div class="card-body text-center d-flex flex-column">
                    <img src="{{ asset('images/services/cloud.png') }}" alt="cloud-computing" class="img-fluid mb-3">
                    <h3 class="card-title fw-bold">Cloud Computing</h3>
                    <p class="mt-auto">I have learned to host data on virtual servers using the AWS Educate
                        platform, making data management hassle-free.</p>
                </div>
            </div>
        </div>

        <!-- Card 4: Competitive Programming -->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow-sm border-0 rounded h-100 d-flex flex-column">
                <div class="card-body text-center d-flex flex-column">
                    <img src="{{ asset('images/services/programming.png') }}" alt="competitive-programming"
                        class="img-fluid mb-3">
                    <h3 class="card-title fw-bold">Competitive Programming</h3>
                    <p class="mt-auto">I practice coding on HackerRank to enhance my problem-solving skills,
                        tackling challenges that range from minutes to hours.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="education" class="container education_area py-5 rounded-3 shadow-lg">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h2 class="services-title display-5 fw-bold">Education</h2>
            <p class="lead">Here is a glimpse of the institutions I have attended and my performance in the courses.
            </p>
        </div>
    </div>
    {{-- <h2 class="display-5 fw-bold mb-4">Education</h2>
    <p class="mb-5">Here is a glimpse of the institutions I have attended and my performance in the courses.
    </p> --}}
    <div class="education-items">
        <div class="row mb-4">
            <div class="col-lg-9 col-md-8">
                <h3 class="fw-bold">[ B.Tech ]</h3>
                <h6 class="text-muted mt-2"><img src="{{ asset('images/university.png') }}" alt="college logo"
                        class="me-2">JSS Academy Of Technical Education, Noida</h6>
            </div>
            <div class="col-lg-3 col-md-4 text-md-end">
                <p class="fw-bold mb-1">(2017-2021)</p>
                <p class="text-muted">Percentage - 74%</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-9 col-md-8">
                <h3 class="fw-bold">[ Intermediate ]</h3>
                <h6 class="text-muted mt-2"><img src="{{ asset('images/university.png') }}" alt="college logo"
                        class="me-2">ST. Mary's Convent Senior Secondary School, Gajraula</h6>
            </div>
            <div class="col-lg-3 col-md-4 text-md-end">
                <p class="fw-bold mb-1">(2014-2016)</p>
                <p class="text-muted">Percentage - 88%</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <h3 class="fw-bold">[ High School ]</h3>
                <h6 class="text-muted mt-2"><img src="{{ asset('images/university.png') }}" alt="college logo"
                        class="me-2">ST. Mary's Convent Senior Secondary School, Gajraula</h6>
            </div>
            <div class="col-lg-3 col-md-4 text-md-end">
                <p class="fw-bold mb-1">(2002-2014)</p>
                <p class="text-muted">Percentage - 91%</p>
            </div>
        </div>
    </div>
</section>


<section id="certification" class="container certification-area py-5 rounded-3 shadow-lg">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Certifications</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of The Certificate</th>
                    <th scope="col">Issuing Company</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Linux Absolute Beginner</td>
                    <td>Udemy</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>HTML, CSS & Bootstrap</td>
                    <td>Udemy</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Software Engineering Virtual Experience</td>
                    <td>Udemy</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>AWS Cloud Practitioner</td>
                    <td>Amazon Web Services</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>The Fundamentals Of Digital Marketing</td>
                    <td>Google</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Responsive Web Designing</td>
                    <td>freeCodeCamp</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- <style>

</style> -->


<footer id="contact" class="footer-area bg-dark text-white">
    <div class="container">
        <div class="site-logo text-center mb-4">
            <a href="#">
                <img src="{{ asset('images/logo.png') }}" alt="site-logo" class="img-fluid"
                    style="max-width: 150px;">
            </a>
        </div>
        <div class="social text-center mb-3">
            <h5 class="text-uppercase mb-3">FOLLOW ME</h5>
            <p><img src="{{ asset('images/follow/envelope.png') }}" alt="email-logo" class="me-2">
                taruntech98@gmail.com</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://www.linkedin.com/in/tarunrana1998/" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/linkedin.png') }}" alt="linkedin-logo" class="img-fluid"
                        style="max-width: 30px;">
                </a>
                <a href="https://twitter.com/tarun_rana54" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/twitter.png') }}" alt="twitter-logo" class="img-fluid"
                        style="max-width: 30px;">
                </a>
                <a href="https://www.hackerrank.com/tarunrana1998" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/hackerrank.png') }}" alt="hackerrank-logo" class="img-fluid"
                        style="max-width: 30px;">
                </a>
            </div>
        </div>
    </div>
    <div class="text-center py-4 bg-black">
        <p class="mb-0">&copy; 2024 Tarun Rana. All rights reserved.</p>
    </div>
</footer>

</body>

<!-- jquery file-->
<script src="./js/jquery.js"></script>

</html>
