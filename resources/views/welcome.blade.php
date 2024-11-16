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

<body oncontextmenu="return false">

    <!-- =======================================Start Header Area =========================================-->
    <header>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand bg-light" href="#"><img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="height:100px ;"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                        <li>
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

        </div>


    </header>
    <!-- =======================================End Header Area =========================================-->

    <!-- =======================================        Start Banner Area     =========================================-->

    <section id="home" class="site-banner">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-6 col-md-12 ">
                    <h3 class="title-text title_underline">Hey ____________________</h3>
                    <h1 class="title-text">I am Tarun Rana</h1>
                    <h4 class="title-text">FULL STACK DEVELOPER</h4>
                    <div class="row cv-button ">
                        {{-- <a class="m-2" href="./Download/resume.pdf" download style="color: white;">
                            <button class="btn btn-primary col-md-3 col-lg-8">GET CV</button>
                        </a> --}}
                        <a class ="m-2" href="" style="color: white;">
                            <button class="btn btn-primary col-md-3 col-lg-8" href="#">HIRE ME</button>

                            {{-- <button class="btn btn-primary hire-button col-md-3 col-lg-8">GET CV</button> --}}
                        </a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <img src="{{ asset('images/banner/banner-image.png') }}" class="img-fluid" alt="logo">
                </div>
            </div>
        </div>


    </section>
    <!-- =======================================        End Banner Area       =========================================-->

    <!-- =======================================        About Area       =========================================-->
    <section id="about" class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('images/about-us.png') }}" alt="About me" class="img-fluid">
                    </div>

                </div>
                <div class="col-lg-6">
                    <h2 class="about-para span_about">
                        <span class="space_text">LET ME</span>

                        <span class="space_text">INTRODUCE</span>

                        <span class="space_text"> MYSELF</span>

                    </h2>
                    <br>
                    <p>I am software engineer<sup></sup>, currently working in 91 Digital Pvt Ltd.</p>

                    <p>I have worked on frontend and backend for many projects. My area of expertise is LAMP stack. Expanding my skills in JS Framework. You can check out my profile on
                        <a href="https://wwww.hackerrank.com/tarunrana1998" target="_blank"><b>HackerRank</b></a> or
                        <a href="https://www.linkedin.com/in/tarurana1998/" target="_blank"><b>LinkedIn.</b></a>
                    </p>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary"><a href="https://www.google.com" target="_blank"
                            style="color: whitesmoke;">Want To know more</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================================        End About Area       =========================================-->


    <!-- =============================        Start Services Area      ===============================-->

    <div id="services" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="services-title">Services Area</h2>
                </div>

                <div class="services-intro mr-3">
                    <br>
                    <p>Given below are the services offered by me. I have been practicing in these areas from many
                        years.

                        This is my first Web Project which has been purely made from scratch with <b>HTML5</b>,<b>
                            CSS3</b> & <b>Bootstrap</b> libraries.
                        Apart from it i have worked on Android Studio , Learned fundamentals of Cloud Computing and
                        practicing competitive coding on HackerRank</p>

                </div>
            </div>
            <div class="container services-list">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 services-back">
                        <div class="services">
                            <div class="services-img text-center py-4">
                                <img src="{{ asset('images/services/web.png') }}" alt="web-development">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Web Developer</h3>
                                <p>The first project i have worked on is my portfolio website shown in front of you.</p>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 services-back">
                        <div class="services">
                            <div class="services-img text-center py-4">
                                <img src="{{ asset('images/services/android1.png') }}" alt="android-development">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Android Developer</h3>
                                <p>I have developed two android applicaions using Android Studio like Rooling The Dice
                                    and music player.

                                </p>
                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 services-back">
                        <div class="services">
                            <div class="services-img text-center py-4">
                                <img src="{{ asset('images/services/cloud.png') }}" alt="cloud-computing">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Cloud Computing</h3>
                                <p>I Signed up in AWS Educate platform , where i learned how to host your data on
                                    virtual servers without any hassle. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 services-back">
                        <div class="services">
                            <div class="services-img text-center py-4">
                                <img src="{{ asset('images/services/programming.png') }}" alt="competitive-programming">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Competitive Programming</h3>
                                <p>I code on HackerRank platform and improves my problem solving skills. Sometimes the
                                    problem take minutes and Sometimes hours.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <!-- =============================        End Services Area       ================================-->

    <!-- =============================        Education Starting  Area       ================================-->
    <section id="education" class="education_area">

        <div class="container-fluid text-center">
            <h2 class="education-title">Education</h2>

            <p>Here is the glimpse of the institutions i have attended and my performance in the courses.</p>
            <br>
            <br>
        </div>
        <div class="container education-items ">
            <div class="row ">
                <div class="col-lg-9 col-md-4 col-sm-2 text-left">
                    <h3>[ B.Tech ]</h3>
                    <br>
                    <h6 class="institute-color"><img src="{{ asset('images/university.png') }}" alt="college logo"> JSS Academy Of
                        Technical Education , Noida</h6>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 text-right">
                    <br>
                    <p><b>(2017-2021)</b></p>
                    <p><i>Percentage-74 %</i></p>

                </div>
            </div>
        </div>

        <div class="container education-items ">
            <div class="row ">
                <div class="col-lg-9 col-md-4 col-sm-2 text-left">
                    <h3>[ Intermediate ]</h3>
                    <br>
                    <h6 class="institute-color"><img src="{{ asset('images/university.png') }}" alt="college logo"> ST. Mary's
                        Convent Senior Secondary School , Gajraula</h6>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 text-right">
                    <br>
                    <p><b>(2014-2016)</b></p>
                    <p><i>Percentage-88 %</i></p>

                </div>
            </div>
        </div>

        <div class="container education-items ">
            <div class="row ">
                <div class="col-lg-9 col-md-4 col-sm-2 text-left">
                    <h3>[ High School ]</h3>
                    <br>
                    <h6 class="institute-color"><img src="{{ asset('images/university.png') }}" alt="college logo"> ST. Mary's
                        Convent Senior Secondary School , Gajraula</h6>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 text-right">
                    <br>
                    <p><b>(2002-2014)</b></p>
                    <p><i>Percentage-91 %</i></p>

                </div>
            </div>
        </div>

    </section>


    <!-- =============================        Education Ending Area       ================================-->

    <!-- =============================     Certificaton Starting Area      ================================-->
    <section id="certification" class="certification-area">
        <div class="container">
            <div class=" text-center">
                <h2 class="certification-title">Certifications</h2>
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th class="table-heading" scope="col-1">#</th>
                            <th class="table-heading"scope="col-7"><u>Name of The Certificate</u></th>
                            <th class="table-heading" scope="col-4"><u>Issuing Company</u></th>
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
                            <td>HTML , CSS & Bootstrap</td>
                            <td>Udemy</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Software Engineering Virtual Experience</td>
                            <td>Udemy</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>AWS Cloud Practioner</td>
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
        </div>
    </section>


    <!-- =============================        Certification Ending Area       ================================-->

    <!-- =============================        Contact Area       ================================-->





    <!-- =============================        Contact Area       ================================-->

    <!-- =============================        Footer Area       ================================-->
    <footer id="contact" class="footer-area">
        <div class="container">
            <div class="site-logo text-center">
                <a href="#"><img src="{{ asset('images/logo.png') }}" alt="site-logo"> </a>
            </div>
        </div>
        <div class="social text-center">
            <h5 class="text-uppercase">FOLLOW ME</h5>
            <p> <img src="{{ asset('images/follow/envelope.png') }}" alt="email-logo"> tarunrana1997@gmail.com</p>
            <a class="gap" href="https://www.linkedin.com/in/tarunrana1998/" target="_blank"><img
                    src="{{ asset('images/follow/linkedin.png') }}" alt="linkedin-logo"></a>
            <a class="gap"href="https://twitter.com/tarun_rana54" target="_blank"><img
                    src="{{ asset('images/follow/twitter.png') }}" alt="twitter-logo"></a>
            <a class="gap" href="https://www.hackerrank.com/tarunrana1998" target="_blank"><img
                    src="{{ asset('images/follow/hackerrank.png') }}" alt="hackerrank-logo"></a>
        </div>
    </footer>

    <!-- =============================        Footer Area       ================================-->

</body>

<!-- jquery file-->
<script src="./js/jquery.js"></script>

</html>