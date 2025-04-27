<?php

use Illuminate\Support\Facades\Route;

// Route::domain('{account}.tarunrana.com')->group(function () {
//     Route::get('/', function (string $account) {
//         return view('test');
//     });
//     // return "Hello World";
// });


Route::get('/', function () {
    $projects = [
        (object) [
            'title' => 'OTTCinemaTV',
            'description' => 'An OTT and cinema release aggregator site built using Laravel, Elasticsearch, and SCSS for advanced search and UI performance.',
            'image' => asset('images/projects/ott_cinema.png'),
            'link' => 'https://www.ottcinematv.com',
            'technologies' => ['Laravel', 'Elasticsearch', 'SCSS', 'Bootstrap', 'MySQL']
        ],
        (object) [
            'title' => 'MySmartPrice',
            'description' => 'Built scalable crawlers, APIs, migrated system from Core PHP to Laravel, optimized SEO with Web-Core Vitals improvements, managed ElasticSearch real-time updates, Redis caching, email alert systems, and admin panel dashboards.',
            'image' => asset('images/projects/mysmartprice.png'),
            'link' => '#', // Update link if available
            'technologies' => ['Laravel', 'ElasticSearch', 'Redis', 'MySQL','Scraping' , 'Email Alerts' ,'PHP', 'SEO']
        ],
        (object) [
            'title' => 'TrackMyHashtag - Twitter Analytics',
            'description' => 'Migrated Twitter API from v1.1 to v2, integrated subscription-based payment (Stripe), built modern UIs from Figma designs, handled backend API integrations via dashboard seamlessly.',
            'image' => asset('images/projects/trackmyhashtag.png'),
            'link' => 'https://www.trackmyhashtag.com', // If live
            'technologies' => ['Twitter API v2', 'Stripe', 'Laravel', 'Frontend Development', 'Dashboard UI']
        ],
        (object) [
            'title' => 'FollowerSearch - Twitter Profile Insights',
            'description' => 'Visualized Twitter user statistics using Highcharts, migrated 150 million users from MySQL to ElasticSearch for the "Search Bios" module, and integrated Stripe for seamless payments.',
            'image' => asset('images/projects/discontinued.jpg'),
            'link' => 'https://www.followersearch.com', // If live
            'technologies' => ['ElasticSearch', 'MySQL', 'Stripe', 'Highcharts', 'Laravel']
        ],
        (object) [
            'title' => 'Newsdata.io - News API Platform',
            'description' => 'Fully developed the frontend and backend for Newsdata.io, a platform providing real-time news APIs for developers across various industries.',
            'image' => asset('images/projects/newsdata_io.png'),
            'link' => 'https://newsdata.io',
            'technologies' => ['Laravel', 'Bootstrap', 'API Development', 'Frontend', 'Backend', 'MySQL']
        ],
        (object) [
            'title' => 'Personal Portfolio website',
            'description' => 'Developed marketing webpages and designed custom, developer-friendly API documentation from scratch for Bytesview, enhancing user onboarding and retention.',
            'image' => asset('images/projects/portfolio.png'),
            'link' => 'https://tarunrana.in',
            'technologies' => ['Laravel', 'Frontend', 'Content Writing', 'Technical Design','Email Messaging', 'MySQL']
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



    return view('welcome',compact('projects','certifications'));
});

Route::get('/test1', function () {
    return view('test1');
});
