<?php

return [
    'production' => false,
    'baseUrl' => 'https://elaboratecode.com/',
    'name' => 'Elaborate Code',
    'title' => 'Elaborate Code',
    'description' => 'IT Services and IT Consulting',
    'collections' => [],
    // 
    'default_lang' => 'en',
    // 
    'routes' => [
        ['url' => '/', 'name' => 'Home',],
        ['url' => '/contact', 'name' => 'Contact',],
    ],
    // 
    'socials' => [
        'linkedin' => 'https://www.linkedin.com/company/elaboratecode',
        'github' => 'https://github.com/elaborate-code',
        'twitter' => '',
        'instagram' => 'https://www.instagram.com/elaborate_code/',
        'youtube' => 'https://www.youtube.com/channel/UCkap_5-2E7fF_uAbfkx1wEg',
        'facebook' => 'https://www.facebook.com/elaboratecode/',
    ],
    'main_email' => 'medilies.contact@gmail.com',
    'main_phone' => '+213675026963',
    // 
    'services' => [
        [
            'title' => 'Software development',
            'desc' => 'We believe we got top notch programmers  that are ready to realize your ideas and eradicate points of failure within your company',
            'img' => '/assets/images/group-young-business-people-working-office-min.jpg',
            'imgAlt' => 'group young business people working office',
        ],
        [
            'title' => 'Systems administration',
            'desc' => 'Linux or Windows? whatever preference you got we will provision the right server with the right tools to your company',
            'img' => '/assets/images/close-up-man-writing-code-laptop-min.jpg',
            'imgAlt' => 'close up man writing code laptop',
        ],
        [
            'title' => 'Network engineering',
            'desc' => 'We know very well that the network is the foundation of digitalization and you can trust us to manage its various aspects.',
            'img' => '/assets/images/young-man-engineer-making-program-analyses-min.jpg',
            'imgAlt' => 'young man engineer making program analyses',
        ],
    ],
    // 
    'projects' =>
    [
        [
            'name' => 'Eazy IP',
            'desc' => 'A Progressive Web App that aims at becoming an essential toolkit for the network engineers by handling the IP operations flawlessly',
            'href' => 'https://eazyip.github.io/',
            'img' => '/assets/images/eazyip-ladingpage-mockups-min.png',
        ],
        [
            'name' => 'Darlink',
            'desc' => 'A multi-user home automation IOT platform that enables functionalities like realtime sensors monitoring and remote actions',
            'href' => '#',
            'img' => '/assets/images/darlink-min.png',
        ],
        [
            'name' => 'School Scope',
            'desc' => 'Tailored according to the algerian education system and destined to be in charge of administering students registrations step by step in privet schools',
            'href' => '#',
            'img' => '/assets/images/school-scope-min-min.png',
        ],
        [
            'name' => 'Residenceely',
            'desc' => 'Helps real estate agencies keep records of their apartments and clients and fully manages the sales process',
            'href' => '#',
            'img' => '/assets/images/residenceely.png',
        ],
    ],
];
