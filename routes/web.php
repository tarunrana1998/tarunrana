<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireMeController;

// Route::domain('{account}.tarunrana.com')->group(function () {
//     Route::get('/', function (string $account) {
//         return view('test');
//     });
//     // return "Hello World";
// });


Route::get('/', function () {
    $metrics = [
        (object) [
            'label' => 'Experience',
            'value' => '5+ years',
            'detail' => 'Shipping production web platforms end-to-end.',
        ],
        (object) [
            'label' => 'Focus',
            'value' => 'Full-stack',
            'detail' => 'Frontend, backend, and data pipeline ownership.',
        ],
        (object) [
            'label' => 'Specialty',
            'value' => 'Modernization',
            'detail' => 'Legacy migration, API scaling, and AI integration.',
        ],
    ];

    $skills = [
        (object) [
            'title' => 'Backend & Web Development',
            'description' => 'Robust, scalable web applications using modern stacks.',
            'items' => ['PHP', 'Laravel (LAMP)', 'jQuery', 'JavaScript', 'Node.js', 'React.js'],
        ],
        (object) [
            'title' => 'Databases & Caching',
            'description' => 'High-performance data storage and retrieval systems.',
            'items' => ['MongoDB', 'MySQL', 'ElasticSearch', 'Redis'],
        ],
        (object) [
            'title' => 'APIs & Integrations',
            'description' => 'Seamless data exchange and third-party service integration.',
            'items' => ['REST', 'JSON', 'OAuth', 'Third-party APIs'],
        ],
        (object) [
            'title' => 'Servers, DevOps & AI',
            'description' => 'Infrastructure management and AI-assisted workflows.',
            'items' => ['Linux', 'AWS (EC2, S3)', 'CI/CD', 'Gemini', 'ChatGPT', 'GitHub Copilot'],
        ],
    ];

    $experience = [
        (object) [
            'role' => 'Senior Software Engineer',
            'company' => '91mobiles',
            'period' => 'Jul \'22 — Present',
            'summary' => 'Leading full-stack development of high-traffic, SEO-driven microservices platforms.',
            'highlights' => [
                'Executed production modernization: Core PHP to Laravel, and PHP/MySQL upgrades.',
                'Optimized REST APIs and Core Web Vitals using Redis, Elasticsearch, and AI tools.',
                'Enhanced system security, maintainability, and performance at scale.',
            ],
            'stack' => ['Laravel', 'PHP', 'MySQL', 'Elasticsearch', 'Redis', 'React', 'jQuery'],
        ],
        (object) [
            'role' => 'Software Developer',
            'company' => 'Bytesview Analytics',
            'period' => 'Jan \'21 — Jul \'22',
            'summary' => 'Built and scaled SaaS products delivering data-intensive dashboards.',
            'highlights' => [
                'Indexed 150M+ records into Elasticsearch and integrated Twitter API v2.',
                'Implemented Stripe payment gateways for secure, real-time transactions.',
                'Delivered pixel-perfect UIs and optimized backend workflows.',
            ],
            'stack' => ['Laravel', 'PHP', 'MySQL', 'Elasticsearch', 'JavaScript', 'Highcharts'],
        ],
    ];

    $projects = [
        (object) [
            'title' => 'Ottcinematv',
            'tagline' => 'Content-driven OTT platform.',
            'role' => 'Lead Developer',
            'problem' => 'Need for scalable content ingestion and intelligent metadata processing.',
            'solution' => 'Automated CI/CD, Gemini AI for metadata, queue-based processing.',
            'outcome' => 'Robust backend with single-click ingestion and real-time content management.',
            'decisions' => ['Gemini AI integration', 'Automated CI/CD', 'Queues and Jobs'],
            'tech' => ['Laravel', 'Gemini AI', 'SQL', 'CI/CD'],
            'image' => asset('images/projects/ott_cinema.png'),
            'link' => 'https://www.ottcinematv.com',
        ],
        (object) [
            'title' => 'MySmartPrice, 91mobiles',
            'tagline' => 'High-traffic price comparison platform.',
            'role' => 'Senior Engineer',
            'problem' => 'Legacy system scalability and performance issues.',
            'solution' => 'Migrated UI to Laravel, implemented real-time tracking and caching.',
            'outcome' => 'Improved search rankings, faster load times, and maintainability.',
            'decisions' => ['Core PHP to Laravel', 'Real-time tracking', 'SEO Optimization'],
            'tech' => ['Laravel', 'Redis', 'Mobile-First', 'SEO'],
            'image' => asset('images/projects/mysmartprice.png'),
            'link' => '#',
        ],
        (object) [
            'title' => 'TrackMyHashtag',
            'tagline' => 'Subscription Twitter analytics for growth teams.',
            'role' => 'Full-stack engineer',
            'problem' => 'API migration and billing upgrades were blocking product scale.',
            'solution' => 'Migrated to Twitter API v2, redesigned flows, and integrated Stripe billing.',
            'outcome' => 'Modernized data ingestion and enabled recurring revenue at scale.',
            'decisions' => ['Twitter API v2', 'Stripe Integration', 'Responsive Dashboard'],
            'tech' => ['Laravel', 'Twitter API v2', 'Stripe', 'JavaScript'],
            'image' => asset('images/projects/trackmyhashtag.png'),
            'link' => 'https://www.trackmyhashtag.com',
        ],
        (object) [
            'title' => 'Newsdata.io',
            'tagline' => 'Real-time news APIs for developers.',
            'role' => 'Lead full-stack engineer',
            'problem' => 'Needed a developer-first platform for reliable news data delivery.',
            'solution' => 'Built the frontend, API layer, and dashboards with a clean onboarding flow.',
            'outcome' => 'Launched a performant API product used across industries.',
            'decisions' => ['Rate-limited API design', 'Developer-centric documentation UX', 'Reliable ingestion pipelines'],
            'tech' => ['Laravel', 'API Design', 'MySQL', 'Frontend'],
            'image' => asset('images/projects/newsdata_io.png'),
            'link' => 'https://newsdata.io',
        ],
    ];

    $writings = [
        (object) [
            'title' => 'Designing search relevance pipelines with ElasticSearch',
            'summary' => 'How I structure indexing, scoring, and query-time boosts for large catalogs.',
            'tag' => 'Search Architecture',
            'date' => '2024',
            'link' => '#',
        ],
        (object) [
            'title' => 'Core Web Vitals without sacrificing product velocity',
            'summary' => 'Practical performance upgrades that move Lighthouse scores and retention.',
            'tag' => 'Performance',
            'date' => '2024',
            'link' => '#',
        ],
        (object) [
            'title' => 'Building resilient crawlers for fast-changing data',
            'summary' => 'Retry strategies, data QA, and observability patterns for crawler fleets.',
            'tag' => 'Data Systems',
            'date' => '2023',
            'link' => '#',
        ],
    ];

    $certifications = [
        (object) [
            'title' => 'B.TECH in Computer Science Engineering',
            'image' => '', // No image
            'description' => 'JSS Academy Of Technical Education (GPA: 7.8), Noida, India',
        ],
        (object) [
            'title' => 'INTERMEDIATE-12TH in PCM',
            'image' => '', // No image
            'description' => "St. Mary's Convent Sr. Sec. School (GPA: 9), Gajraula, India",
        ],
        (object) [
            'title' => 'Deloitte Australia - Technology Job Simulation',
            'image' => asset('images/certifications/deloitte_simulation.png'),
            'description' => 'Completed Deloitte\'s virtual technology job simulation, gaining experience in client communication, project management, and technology consulting.',
        ],
        (object) [
            'title' => 'Ultimate AWS Certified Solutions Architect Associate 2025',
            'image' => asset('images/certifications/aws_architect.jpg'),
            'description' => 'Earned this certification from Udemy, mastering key AWS services, solutions architecture best practices, and cloud infrastructure design.',
        ],
        (object) [
            'title' => 'Software Engineering Virtual Experience by JP Morgan',
            'image' => asset('images/certifications/jp_morgan_simulation.png'),
            // 'image' => 'images/services/software-engineering.png',
            'description' => 'Gained valuable real-world experience and skills in software engineering practices, issued by Udemy.',
        ],
        (object) [
            'title' => 'The Fundamentals of Digital Marketing By Google',
            'image' => asset('images/certifications/google_marketing.png'),
            'description' => 'A Google certification that provided me with skills to effectively market and analyze digital content.',
        ],

    ];



    return view('welcome', compact('projects', 'certifications', 'metrics', 'skills', 'experience', 'writings'));
});


Route::post('/hire-me', [HireMeController::class, 'store'])->name('hire-me.store');
