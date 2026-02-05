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
            'value' => 'Search + data',
            'detail' => 'ElasticSearch, crawling, and real-time indexing.',
        ],
    ];

    $skills = [
        (object) [
            'title' => 'Frontend Engineering',
            'description' => 'Minimal, accessible, performance-first interfaces that scale cleanly.',
            'items' => ['Responsive UI', 'Tailwind CSS', 'SCSS', 'JavaScript', 'Progressive enhancement', 'Core Web Vitals'],
        ],
        (object) [
            'title' => 'Backend & APIs',
            'description' => 'Clean architecture with pragmatic, production-hardened Laravel services.',
            'items' => ['Laravel', 'PHP 8', 'REST APIs', 'Authentication', 'Queueing', 'Caching'],
        ],
        (object) [
            'title' => 'Data, Search, Scale',
            'description' => 'Search relevance, data ingestion, and indexing at high volume.',
            'items' => ['ElasticSearch', 'Redis', 'MySQL', 'Web scraping', 'ETL workflows', 'Monitoring'],
        ],
        (object) [
            'title' => 'Infra & DX',
            'description' => 'Reliable deployments and developer experience that stays frictionless.',
            'items' => ['Linux', 'AWS', 'CI/CD', 'Git', 'Observability', 'Documentation'],
        ],
    ];

    $experience = [
        (object) [
            'role' => 'Software Engineer',
            'company' => '91Digitals / 91mobiles',
            'period' => 'July 2022 - Present',
            'summary' => 'Own search, crawling, and product performance initiatives across high-traffic platforms.',
            'highlights' => [
                'Built and tuned ElasticSearch pipelines for large catalog search relevance.',
                'Improved crawler reliability with resilient retries and tighter data QA.',
                'Partnered with product on SEO and page-speed optimizations that improved discoverability.',
            ],
            'stack' => ['Laravel', 'ElasticSearch', 'Redis', 'MySQL', 'Linux'],
        ],
        (object) [
            'role' => 'Software Developer',
            'company' => 'Bytesview Analytics',
            'period' => 'August 2021 - June 2022',
            'summary' => 'Delivered full-stack features, payment flows, and analytics dashboards.',
            'highlights' => [
                'Shipped subscription billing flows with Stripe and secure role-based dashboards.',
                'Migrated core API integrations to reduce operational complexity.',
                'Built reusable UI components aligned with design handoff.',
            ],
            'stack' => ['Laravel', 'Stripe', 'MySQL', 'JavaScript', 'SCSS'],
        ],
        (object) [
            'role' => 'Software Engineering Intern',
            'company' => 'Bytesview Analytics',
            'period' => 'January 2021 - July 2021',
            'summary' => 'Contributed to frontend features and backend services while ramping into production systems.',
            'highlights' => [
                'Implemented UI enhancements with careful attention to performance.',
                'Built backend modules in PHP/Laravel supporting live customer traffic.',
                'Learned production observability practices and release workflows.',
            ],
            'stack' => ['Laravel', 'PHP', 'MySQL', 'JavaScript'],
        ],
    ];

    $projects = [
        (object) [
            'title' => 'MySmartPrice',
            'tagline' => 'Search + price intelligence at scale.',
            'role' => 'Full-stack engineer',
            'problem' => 'Legacy PHP stack could not keep up with real-time product data and SEO demands.',
            'solution' => 'Migrated to Laravel, built resilient crawlers, and introduced ElasticSearch with Redis caching.',
            'outcome' => 'Faster search experiences, stable indexing, and improved Core Web Vitals.',
            'decisions' => ['ElasticSearch for high-cardinality queries', 'Redis for hot-path caching', 'Queue-based crawlers with retries'],
            'tech' => ['Laravel', 'ElasticSearch', 'Redis', 'MySQL', 'SEO'],
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
            'decisions' => ['Token-aware API orchestration', 'Stripe webhooks for billing events', 'Modular dashboard UI'],
            'tech' => ['Laravel', 'Twitter API v2', 'Stripe', 'JavaScript'],
            'image' => asset('images/projects/trackmyhashtag.png'),
            'link' => 'https://www.trackmyhashtag.com',
        ],
        (object) [
            'title' => 'FollowerSearch',
            'tagline' => 'Search bios for 150M+ Twitter profiles.',
            'role' => 'Backend + data engineer',
            'problem' => 'MySQL full-text search was too slow for high-volume bios.',
            'solution' => 'Moved search to ElasticSearch with optimized indexing and analytics dashboards.',
            'outcome' => 'Responsive search experience and scalable analytics for power users.',
            'decisions' => ['Bulk indexing strategy', 'Analytics with Highcharts', 'Stripe for subscriptions'],
            'tech' => ['ElasticSearch', 'MySQL', 'Highcharts', 'Stripe'],
            'image' => asset('images/projects/discontinued.jpg'),
            'link' => 'https://www.followersearch.com',
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
