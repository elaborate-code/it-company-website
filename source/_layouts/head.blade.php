<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W4WQNSDGS1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W4WQNSDGS1');
    </script>

    {{--  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta property="og:url" content="{{ $page->getUrl() }}" />

    <title> {{ $page->title }} </title>
    <meta property="og:title" content="{{ $page->title }}" />

    <meta name="description" content="{{ $page->description }}">
    <meta property="og:description" content="{{ $page->description }}" />

    <meta property="og:type" content="website" />

    <meta property="og:image" content="{{ $page->baseUrl }}assets/images/OG-image.png" />

    <meta property="og:locale" content="en_US" />

    {{-- scripts --}}
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Raleway&family=Yeseva+One&display=swap"
        rel="stylesheet">


    <link rel="manifest" href="/manifest.json">

    {{-- icons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#F22929">

    {{--  --}}
    <meta name="twitter:card" content="summary_large_image" />
</head>
