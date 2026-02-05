<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="dark">

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
    <meta name="description" content="Tarun Rana is a senior full-stack software engineer with 5+ years of experience building high-performance web platforms, search systems, and developer-focused products.">
    <meta name="keywords" content="Tarun Rana, Software Engineer, Full Stack Developer, Laravel, ElasticSearch, Portfolio">
    <meta name="author" content="Tarun Rana">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0b0f14">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tarun Rana | Senior Full-Stack Engineer">
    <meta property="og:description" content="Senior full-stack engineer building fast, scalable platforms with strong architecture and developer experience.">
    <meta property="og:image" content="{{ asset('images/portfolio-thumbnail.png') }}">
    <meta property="og:url" content="https://tarunrana.in">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tarun Rana | Senior Full-Stack Engineer">
    <meta name="twitter:description" content="Senior full-stack engineer building fast, scalable platforms with strong architecture and developer experience.">
    <meta name="twitter:image" content="{{ asset('images/portfolio-thumbnail.png') }}">

    <title>Tarun Rana | Senior Full-Stack Engineer</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon_io/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header class="sticky top-0 z-50 border-b border-subtle bg-surface-blur backdrop-blur">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#home" class="flex items-center gap-3">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-surface-2 text-accent font-display text-lg">TR</span>
                <div>
                    <p class="font-display text-base font-semibold">Tarun Rana</p>
                    <p class="text-xs text-muted">Senior Full-Stack Engineer</p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm">
                <a href="#about" class="text-muted hover:text-accent transition">About</a>
                <a href="#skills" class="text-muted hover:text-accent transition">Skills</a>
                <a href="#experience" class="text-muted hover:text-accent transition">Experience</a>
                <a href="#projects" class="text-muted hover:text-accent transition">Projects</a>
                <a href="#writing" class="text-muted hover:text-accent transition">Writing</a>
                <a href="#contact" class="text-muted hover:text-accent transition">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <button type="button" data-theme-toggle aria-label="Toggle theme" class="theme-toggle rounded-full px-4 py-2 text-xs font-semibold">
                    Theme: <span data-theme-label>Dark</span>
                </button>
                <a href="#contact" class="hidden sm:inline-flex rounded-full px-5 py-2 text-sm font-semibold btn-primary">Let's talk</a>
                <details class="relative md:hidden">
                    <summary class="list-none rounded-full border border-subtle px-4 py-2 text-xs font-semibold cursor-pointer">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-3 w-48 card p-4 text-sm space-y-2">
                        <a href="#about" class="block text-muted hover:text-accent transition">About</a>
                        <a href="#skills" class="block text-muted hover:text-accent transition">Skills</a>
                        <a href="#experience" class="block text-muted hover:text-accent transition">Experience</a>
                        <a href="#projects" class="block text-muted hover:text-accent transition">Projects</a>
                        <a href="#writing" class="block text-muted hover:text-accent transition">Writing</a>
                        <a href="#contact" class="block text-muted hover:text-accent transition">Contact</a>
                    </div>
                </details>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="pt-20 pb-16">
            <div class="max-w-6xl mx-auto px-6 grid gap-12 lg:grid-cols-[1.2fr_0.8fr] items-center">
                <div class="space-y-8" data-reveal>
                    <span class="badge-soft">Senior full-stack engineer</span>
                    <h1 class="text-4xl md:text-6xl font-display font-semibold leading-tight">
                        I build <span class="accent-gradient">scalable</span> platforms and modernize web applications
                        that feel fast, intentional, and trustworthy.
                    </h1>
                    <p class="text-muted text-lg max-w-2xl">
                        Senior Software Engineer with 5+ years of experience in modernizing and scaling web applications using PHP, Laravel, MySQL, and JavaScript. I leverage AI-assisted development tools to drive productivity and code quality.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#projects" class="rounded-full px-6 py-3 text-sm font-semibold btn-primary">View case studies</a>
                        <a href="#contact" class="rounded-full px-6 py-3 text-sm font-semibold border border-subtle">Start a project</a>
                    </div>
                    <div class="flex flex-wrap gap-2 text-sm text-muted">
                        <span class="chip">Laravel</span>
                        <span class="chip">Modernization</span>
                        <span class="chip">AI-Assisted Dev</span>
                        <span class="chip">MySQL</span>
                        <span class="chip">Scalability</span>
                    </div>
                </div>

                <div class="card p-6 space-y-6 shadow-elev float-slow" data-reveal>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/tarun_rana.jpg') }}" alt="Tarun Rana portrait" class="h-24 w-24 rounded-2xl object-cover border border-subtle">
                        <div>
                            <p class="text-lg font-display font-semibold">Tarun Rana</p>
                            <p class="text-sm text-muted">Full-stack engineer, product thinker</p>
                        </div>
                    </div>
                    <div class="grid gap-4 text-sm text-muted">
                        <p>Known for clean architecture, search relevance, and data-driven product delivery.</p>
                        <div class="flex items-center gap-3">
                            <span class="badge-soft">Available</span>
                            <span>Remote, global-ready, async-friendly.</span>
                        </div>
                    </div>
                    <div class="grid gap-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-muted">Focus</span>
                            <span>Platform + DX</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-muted">Strength</span>
                            <span>Search, data, performance</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-6 mt-12 grid gap-4 md:grid-cols-3" data-reveal>
                @foreach ($metrics as $metric)
                    <div class="card p-5">
                        <p class="text-xs uppercase tracking-[0.3em] text-muted">{{ $metric->label }}</p>
                        <p class="text-2xl font-display font-semibold mt-2">{{ $metric->value }}</p>
                        <p class="text-muted mt-2 text-sm">{{ $metric->detail }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="about" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
                <div data-reveal>
                    <x-section-header eyebrow="About" title="Engineering with clarity, speed, and calm execution." subtitle="I care about clean systems, measurable outcomes, and shipping work that holds up under scale." />
                </div>
                <div class="space-y-5 text-muted text-lg" data-reveal>
                    <p>
                        I specialize in modernizing legacy systems and building scalable full-stack products. My work spans high-traffic platforms, API development, and database optimization.
                    </p>
                    <p>
                        I bring an architecture-first mindset to upgrading core technologies (PHP, MySQL) and implementing AI-driven workflows to enhance development speed and code quality.
                    </p>
                    <p>
                        When I join a project, I optimize for efficient execution: utilizing AI tools, writing clean documentation, and building reusable systems that scale with the team.
                    </p>
                </div>
            </div>
        </section>

        <section id="skills" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6" data-reveal>
                <x-section-header eyebrow="Skills" title="A full-stack toolkit, organized around outcomes." subtitle="Grouped by how I deliver value, not by buzzwords." />
                <div class="grid gap-6 md:grid-cols-2">
                    @foreach ($skills as $group)
                        <x-skill-group :group="$group" />
                    @endforeach
                </div>
            </div>
        </section>

        <section id="experience" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6" data-reveal>
                <x-section-header eyebrow="Experience" title="Built for production, trusted at scale." subtitle="Roles that demonstrate ownership across frontend, backend, and data operations." />
                <div class="mt-10 grid gap-6 border-l border-subtle pl-6">
                    @foreach ($experience as $entry)
                        <x-experience-card :entry="$entry" />
                    @endforeach
                </div>
            </div>
        </section>

        <section id="projects" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6" data-reveal>
                <x-section-header eyebrow="Projects" title="Case studies with real impact and technical depth." subtitle="Problem, solution, architecture, and outcomes in a single view." />
                <div class="grid gap-8 lg:grid-cols-2">
                    @foreach ($projects as $project)
                        <x-project-card :project="$project" />
                    @endforeach
                </div>
            </div>
        </section>

        <section id="writing" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6" data-reveal>
                <x-section-header eyebrow="Writing" title="Engineering notes, decisions, and playbooks." subtitle="Short essays on architecture, performance, and shipping product with high standards." />
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($writings as $entry)
                        <x-writing-card :entry="$entry" />
                    @endforeach
                </div>
            </div>
        </section>

        <section id="credentials" class="py-20 section-border">
            <div class="max-w-6xl mx-auto px-6" data-reveal>
                <x-section-header eyebrow="Credentials" title="Proof of discipline and continuous learning." subtitle="Selected certifications that reflect my commitment to architecture and execution." />
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($certifications as $certification)
                        <div class="card p-5 flex flex-col">
                            @if (!empty($certification->image))
                                <img src="{{ asset($certification->image) }}" alt="{{ $certification->title }}" class="h-20 object-contain" loading="lazy">
                            @endif
                            <h3 class="text-base font-display font-semibold mt-4">{{ $certification->title }}</h3>
                            <p class="text-muted text-sm mt-2">{{ $certification->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('components.hire_me')
    </main>

    <footer class="section-border">
        <div class="max-w-6xl mx-auto px-6 py-10 flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="font-display text-lg font-semibold">Tarun Rana</p>
                <p class="text-sm text-muted">Full-stack engineer focused on scalable platforms.</p>
            </div>
            <div class="flex flex-wrap gap-4 text-sm text-muted">
                <a href="mailto:taruntech98@gmail.com" class="hover:text-accent transition">Email</a>
                <a href="https://www.linkedin.com/in/tarunrana1998/" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition">LinkedIn</a>
                <a href="https://github.com/tarunrana1998" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition">GitHub</a>
                <a href="#home" class="hover:text-accent transition">Back to top</a>
            </div>
        </div>
    </footer>
</body>

</html>
