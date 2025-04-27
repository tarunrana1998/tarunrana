<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if (env('APP_ENV') != 'local')
        <!-- Google Analytics (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HTBGZKW5KJ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-HTBGZKW5KJ');
        </script>
    @endif

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tarun Rana's Portfolio - Full Stack Developer and Software Engineer with 4+ years experience in web development, backend systems, web scraping, SEO optimization, and scalable solutions.">
    <meta name="keywords" content="Tarun Kumar Rana, Software Engineer, Full Stack Developer, Portfolio, Laravel Developer, Backend Engineer">
    <meta name="author" content="Tarun Rana">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Open Graph Meta Tags (for better social media sharing) -->
    <meta property="og:title" content="Tarun Rana's Portfolio">
    <meta property="og:description" content="Explore Tarun's software engineering journey, projects, and skills.">
    <meta property="og:image" content="{{ asset('images/portfolio-thumbnail.png') }}">
    <meta property="og:url" content="https://yourdomain.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tarun Rana's Portfolio">
    <meta name="twitter:description" content="Explore Tarun's software engineering journey, projects, and skills.">
    <meta name="twitter:image" content="{{ asset('images/portfolio-thumbnail.png') }}">
    <meta name="twitter:site" content="@YourTwitterHandle">

    <title>Tarun Rana's Portfolio | Software Engineer</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('images/favicon_io/favicon.png') }}" type="image/png"> --}}

    <!-- Favicon for general use -->
    <link rel="icon" href="{{ asset('images/favicon_io/favicon.ico') }}" type="image/x-icon">

    <!-- Favicon for iOS (Apple devices) -->
    <link rel="apple-touch-icon" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}" sizes="180x180">

    <!-- Favicon for Android -->
    <link rel="icon" href="{{ asset('images/favicon_io/android-chrome-192x192.png') }}" sizes="192x192" type="image/png">

    <!-- Favicon for Windows -->
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon_io/mstile-150x150.png') }}">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Bundle JS (Async Loading) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>


@if (env('APP_ENV') == 'local')

    <body>
    @else

        <body oncontextmenu="return false">
@endif

<!-- =======================================Start Header Area =========================================-->

<header class="header-area">
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 rounded-3 position-sticky top-0 z-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Tarun's Logo" class="img-fluid me-2" style="height: 70px;">
                {{-- <span class="fw-bold fs-4 text-primary">Tarun</span> --}}
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#timeline">Work Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#certification">Certifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary px-4 py-2 rounded-pill" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<section id="home" class="site-banner py-5 bg-light d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Column: Content -->
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="display-6 fw-bold mb-2 text-primary">
                    Hey <span class="text-decoration-underline">there!</span>
                </h3>
                <h1 class="display-3 fw-bold mb-3">
                    I'm <span class="text-gradient">Tarun Rana</span>
                </h1>
                <h4 class="text-secondary mb-4">Full Stack Developer | Software Engineer</h4>

                <p class="lead text-muted mb-4">
                    With 4+ years of professional experience, I specialize in crafting scalable web applications,
                    building intelligent crawlers, and integrating complex APIs. My expertise also extends to
                    optimizing search systems with <span class="text-primary fw-bold">ElasticSearch</span>,
                    enhancing SEO Web-Core Vitals, and delivering real-time data solutions. <br><br>

                    As a proficient <span class="text-primary fw-bold">Prompt Engineer</span>, I leverage cutting-edge
                    <span class="fw-bold">Generative AI</span> tools like <span class="text-primary">GPT , Gemini , Deepseek etc.</span> to create
                    innovative AI-powered solutions for daily use like creating webpages , code optimization  etc. I
                    <br><br>
                     <span class="fst-italic ">🚀 Let's bring your ideas to life
                    with the power of AI-driven solutions and prompt engineering!</span>
                </p>
                {{-- <p class="lead text-muted mb-4">
                    With 4+ years of experience, I specialize in building scalable web applications, integrating APIs,
                    and optimizing search with <span class="text-primary fw-bold">ElasticSearch</span>. I'm also proficient in
                    **<span class="text-success fw-bold">Prompt Engineering</span>** using <span class="text-primary">GPT</span>,
                    <span class="text-warning">Gemini</span>, and <span class="text-danger">DeepSeek</span> to create powerful,
                    AI-driven solutions. <br><br>

                    I use **<span class="text-info fw-bold">Lovable</span>** and other advanced AI tools to automate workflows,
                    enhance user experiences, and solve complex challenges. Let's harness the potential of AI to transform your ideas into impactful solutions! 🚀
                </p> --}}



                <div class="d-flex flex-column flex-md-row gap-3">
                    <a href="https://www.linkedin.com/in/tarunrana1998/" target="_blank" class="btn btn-primary btn-lg px-4 py-2 rounded-pill shadow-sm hover-scale">
                        <i class="fa-brands fa-linkedin me-2"></i>Hire Me
                    </a>
                    <a href="#projects" class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill shadow-sm hover-scale">
                        <i class="fa-solid fa-laptop-code me-2"></i>View Projects
                    </a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                <div class="position-relative">
                    <img src="{{ asset('images/tarun_rana.jpg') }}" alt="Tarun Rana" class="img-fluid rounded-4 shadow-lg hover-zoom" style="max-height: 450px; width: 100%; object-fit: cover;">

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary shadow-sm animate-bounce">
                        4+ Years Experience
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- If you are using AOS animation library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>




<section id="timeline" class="timeline-area bg-light py-5 min-vh-100">
    <div class="container bg-white rounded-4 shadow-sm p-4">

        <div class="row">
            <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary">Work Experience</h2>
                <p class="lead text-muted">
                    Below are some of the key experiences and contributions I've made throughout my career.
                    I specialize in Full Stack Development, Product Innovation, and Performance Optimizations.
                </p>
            </div>
        </div>

        <div class="timeline_rows position-relative" data-aos="fade-up" data-aos-delay="200">
            <ul class="timeline-list list-unstyled position-relative ps-4">

                <li class="timeline-item" style="--accent-color:#E24A68">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-briefcase me-2"></i>
                        <span>July 2022 - Present</span>
                    </div>
                    <h5 class="timeline-title fw-bold">Software Engineer at 91Digitals Pvt Ltd (91mobiles)</h5>
                    <div class="timeline-description">
                        <p><strong>→</strong> Optimized search features using ElasticSearch for better
                            scalability.</p>
                        <p><strong>→</strong> Managed QA servers to ensure seamless software testing.</p>
                        <p><strong>→</strong> Enhanced crawling repository for efficient data collection.</p>
                        <p><strong>→</strong> Played a key role in product innovation through R&D.</p>
                    </div>
                </li>

                <li class="timeline-item" style="--accent-color:#1B5F8C">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-cogs me-2"></i>
                        <span>August 2021</span>
                    </div>
                    <h5 class="timeline-title fw-bold">Software Developer at Bytesview Analytics Pvt Ltd</h5>
                    <div class="timeline-description">
                        <p><strong>→</strong> Led projects across frontend and backend development.</p>
                        <p><strong>→</strong> Built scalable, maintainable applications with modern stacks.</p>
                        <p><strong>→</strong> Enhanced app performance across multiple modules.</p>
                    </div>
                </li>

                <li class="timeline-item" style="--accent-color:#4CADAD">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-laptop-code me-2"></i>
                        <span>January 2021</span>
                    </div>
                    <h5 class="timeline-title fw-bold">Internship at Bytesview Analytics Pvt Ltd</h5>
                    <div class="timeline-description">
                        <p><strong>→</strong> Developed frontend features with modern UI frameworks.</p>
                        <p><strong>→</strong> Transitioned to backend work with PHP, Laravel, MySQL.</p>
                        <p><strong>→</strong> Gained strong hands-on full-stack project experience.</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>

<section id="services" class="services-area bg-light py-5 min-vh-100 d-flex align-items-center">
    <div class="container bg-white rounded-4 shadow-sm p-5">

        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary">Services Area</h2>
            <p class="lead text-muted">
                Here are the services I offer, honed through years of experience working on diverse projects.
            </p>
        </div>

        <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
            <!-- Service Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-card text-center border-0 h-100 shadow p-4 rounded-4">
                    <img src="{{ asset('images/services/web.webp') }}" alt="web-development" class="service-icon mx-auto mb-3">
                    <h5 class="fw-bold mb-2">Web Development</h5>
                    <p class="text-muted">
                        Crafting responsive, dynamic websites using HTML5, CSS3, JavaScript, and modern
                        frameworks.
                    </p>
                </div>
            </div>

            <!-- Service Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-card text-center border-0 h-100 shadow p-4 rounded-4">
                    <img src="{{ asset('images/services/scraping.png') }}" alt="web-scraping" class="service-icon mx-auto mb-3">
                    <h5 class="fw-bold mb-2">Web Scraping</h5>
                    <p class="text-muted">
                        Expertise in data extraction, API integration, and building real-time dynamic data
                        solutions.
                    </p>
                </div>
            </div>

            <!-- Service Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-card text-center border-0 h-100 shadow p-4 rounded-4">
                    <img src="{{ asset('images/services/seo.png') }}" alt="seo-development" class="service-icon mx-auto mb-3">
                    <h5 class="fw-bold mb-2">SEO-Friendly Development</h5>
                    <p class="text-muted">
                        Building SEO-optimized websites for better rankings, faster loads, and core web vitals
                        excellence.
                    </p>
                </div>
            </div>

            <!-- Service Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-card text-center border-0 h-100 shadow p-4 rounded-4">
                    <img src="{{ asset('images/services/linux.webp') }}" alt="linux-computing" class="service-icon mx-auto mb-3">
                    <h5 class="fw-bold mb-2">Linux Computing</h5>
                    <p class="text-muted">
                        Skilled with Linux servers, shell scripting, deployments, and server-side performance
                        tuning.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="education" class=" bg-light py-5 min-vh-100">
    <div class="container bg-white rounded-4 shadow-sm p-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary">Education</h2>
            <p class="lead text-muted">
                A journey through the institutions that shaped my technical expertise and academic foundation.
            </p>
        </div>

        <div class="timeline_rows position-relative" data-aos="fade-up" data-aos-delay="200">
            <ul class="timeline-list list-unstyled position-relative ps-4">

                <li class="timeline-item" style="--accent-color:#0d6efd">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-graduation-cap me-2"></i>
                        <span>2017 - 2021</span>
                    </div>
                    <h5 class="timeline-title fw-bold">Bachelor of Technology (B.Tech)</h5>
                    <div class="timeline-description">
                        <p class="mb-1">
                            <img src="{{ asset('images/university.png') }}" alt="College Logo" class="me-2" style="width: 24px; height: 24px;">
                            JSS Academy Of Technical Education, Noida
                        </p>
                        <p class="text-muted mb-1">Stream: <strong>Computer Science and Engineering</strong></p>
                        <p class="text-muted">Percentage: <strong>74%</strong></p>
                    </div>
                </li>

                <li class="timeline-item" style="--accent-color:#198754">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-school me-2"></i>
                        <span>2014 - 2016</span>
                    </div>
                    <h5 class="timeline-title fw-bold">Intermediate (12th Grade)</h5>
                    <div class="timeline-description">
                        <p class="mb-1">
                            <img src="{{ asset('images/university.png') }}" alt="School Logo" class="me-2" style="width: 24px; height: 24px;">
                            ST. Mary's Convent Senior Secondary School, Gajraula
                        </p>
                        <p class="text-muted mb-1">Stream: <strong>Science (PCM)</strong></p>
                        <p class="text-muted">Percentage: <strong>88%</strong></p>
                    </div>
                </li>

                <li class="timeline-item" style="--accent-color:#ffc107">
                    <div class="timeline-date d-flex align-items-center mb-2">
                        <i class="fa-solid fa-school-flag me-2"></i>
                        <span>2002 - 2014</span>
                    </div>
                    <h5 class="timeline-title fw-bold">High School (10th Grade)</h5>
                    <div class="timeline-description">
                        <p class="mb-1">
                            <img src="{{ asset('images/university.png') }}" alt="School Logo" class="me-2" style="width: 24px; height: 24px;">
                            ST. Mary's Convent Senior Secondary School, Gajraula
                        </p>
                        <p class="text-muted mb-1">Stream: <strong>General Studies</strong></p>
                        <p class="text-muted">Percentage: <strong>91%</strong></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>


<section id="projects" class="projects-area bg-light py-5 min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary">Projects</h2>
            <p class="lead text-muted">
                A selection of projects that showcase my skills, passion for software engineering, and
                commitment to building robust applications.
            </p>
        </div>

        <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
            @foreach ($projects as $project)
                <div class="col-lg-6">
                    <div class="card shadow-lg h-100 rounded-4 overflow-hidden project-card">
                        <div class="position-relative">
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid rounded-top-4 project-image" style=" object-fit: cover;">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h4 class="fw-bold text-dark">{{ $project->title }}</h4>
                            <p class="text-muted small mb-3">{{ $project->description }}</p>

                            <div class="mb-3">
                                @foreach ($project->technologies as $tech)
                                    <span class="badge bg-primary-subtle text-primary fw-semibold me-1 mb-1">{{ $tech }}</span>
                                @endforeach
                            </div>

                            <div class="mt-auto">
                                <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary w-100 rounded-3">
                                    <i class="fas fa-eye me-2"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section id="skills" class="py-5 bg-light min-vh-100 d-flex align-items-center">
    <div class="container text-center mb-5 bg-white rounded-4 shadow-sm p-4">
        <h2 class="display-5 fw-bold text-primary">Skills</h2>
        <p class="lead text-muted">I am proficient in various programming languages, frameworks, tools, and
            technologies. Here are a few of them:</p>
        <div class="row g-4">
            @php
                $skills = [
                    ['name' => 'HTML5', 'image' => 'images/skills/html5.png', 'percentage' => 90, 'rating' => '9/10'],
                    ['name' => 'CSS3', 'image' => 'images/skills/css.png', 'percentage' => 85, 'rating' => '8.5/10'],
                    ['name' => 'Bootstrap', 'image' => 'images/skills/bootstrap.png', 'percentage' => 90, 'rating' => '8.5/10'],
                    ['name' => 'PHP', 'image' => 'images/skills/php.png', 'percentage' => 85, 'rating' => '8.5/10'],
                    ['name' => 'MySQL', 'image' => 'images/skills/mysql.png', 'percentage' => 80, 'rating' => '8/10'],
                    ['name' => 'Python', 'image' => 'images/skills/python.png', 'percentage' => 75, 'rating' => '7.5/10'],
                    // ['name' => 'Django', 'image' => 'images/skills/django.png', 'percentage' => 70, 'rating' => '8.5/10'],
                    ['name' => 'ElasticSearch', 'image' => 'images/skills/elasticsearch.png', 'percentage' => 80, 'rating' => '8/10'],
                    ['name' => 'Git', 'image' => 'images/skills/git.png', 'percentage' => 85, 'rating' => '8.5/10'],
                    // ['name' => 'Docker', 'image' => 'images/skills/docker.png', 'percentage' => 75, 'rating' => '8.5/10'],
                    ['name' => 'AWS', 'image' => 'images/skills/aws.png', 'percentage' => 70, 'rating' => '7/10'],
                    ['name' => 'SEO', 'image' => 'images/skills/seo.png', 'percentage' => 80, 'rating' => '8/10'],
                    ['name' => 'Web Scraping', 'image' => 'images/skills/spider.png', 'percentage' => 85, 'rating' => '8.5/10'],
                    ['name' => 'Laravel', 'image' => 'images/skills/laravel.png', 'percentage' => 90, 'rating' => '9/10'],
                    // ['name' => 'CodeIgniter', 'image' => 'images/skills/codeigniter.png', 'percentage' => 80],
                    ['name' => 'jQuery', 'image' => 'images/skills/jquery.png', 'percentage' => 85, 'rating' => '8.5/10'],
                    // ['name' => 'Vue.js', 'image' => 'images/skills/vuejs.png', 'percentage' => 75],
                    ['name' => 'JavaScript', 'image' => 'images/skills/javascript.png', 'percentage' => 80, 'rating' => '8/10'],
                    // ['name' => 'React', 'image' => 'images/skills/react.png', 'percentage' => 75],
                    // ['name' => 'Node.js', 'image' => 'images/skills/node_js.png', 'percentage' => 70],
                ];
            @endphp


            @foreach ($skills as $skill)
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset($skill['image']) }}" alt="{{ $skill['name'] }}" class="img-fluid" style="width: 50px;">
                        <h5 class="ms-4 mb-0 fw-bold">{{ $skill['name'] }}</h5>
                    </div>

                    <div class="progress" role="progressbar" aria-valuenow="{{ $skill['percentage'] }}" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                        <div class="progress-bar bg-primary" style="width: {{ $skill['percentage'] }}%;">
                            {{ $skill['rating'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>


<section id="certification" class="certification-area py-5 bg-light min-vh-100">
    <div class="container bg-white rounded-4 shadow-sm p-4">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-primary">Certifications</h2>
            <p class="lead">Below are some of the certifications I have earned over the years in various areas
                of
                expertise.</p>
        </div>

        <div class="row g-4">
            @foreach ($certifications as $certification)
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="cert-card shadow rounded-3 h-100 d-flex flex-column hover-effect bg-light bg-gradient">
                        <div class="cert-img-container">
                            <img src="{{ asset($certification->image) }}" alt="{{ $certification->title }}" class="img-fluid cert-img">
                        </div>
                        <div class="cert-content p-3">
                            <h3 class="cert-title fw-bold">{{ $certification->title }}</h3>
                            <p class="cert-description">{{ $certification->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>

{{-- <section id="contact" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Contact Me</h2>
                    <p class="text-muted">Got a project idea, a job offer, or just want to say hi? Feel free to reach
                        out!</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">

                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section> --}}


<footer id="contact" class="footer-area bg-dark text-white">
    <div class="container">
        <!-- Site Logo Section -->
        <div class="site-logo text-center mb-4">
            <a href="#">
                <img src="{{ asset('images/logo.png') }}" alt="site-logo" class="img-fluid" style="max-width: 150px;">
            </a>
        </div>

        <!-- Social Follow Section -->
        <div class="social text-center mb-3">
            <h5 class="text-uppercase mb-3">Follow Me</h5>
            <p class="mb-3">
                <img src="{{ asset('images/follow/envelope.png') }}" alt="email-logo" class="me-2">
                taruntech98@gmail.com
            </p>
            <div class="d-flex justify-content-center gap-4">
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/tarunrana1998/" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/linkedin.png') }}" alt="linkedin-logo" class="img-fluid social-icon-img">
                </a>
                <!-- Twitter -->
                <a href="https://x.com/tarun_rana54" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/twitter.png') }}" alt="twitter-logo" class="img-fluid social-icon-img">
                </a>
                <!-- HackerRank -->
                <a href="https://www.hackerrank.com/tarunrana1998" target="_blank" class="social-icon">
                    <img src="{{ asset('images/follow/hackerrank.png') }}" alt="hackerrank-logo" class="img-fluid social-icon-img">
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="text-center py-4 bg-black">
        <p class="mb-0">&copy; {{ date('Y') }} Tarun Rana. All rights reserved.</p>
    </div>
</footer>

<!-- jQuery file -->
<script src="./js/jquery.js"></script>

<!-- End of body -->

</html>
