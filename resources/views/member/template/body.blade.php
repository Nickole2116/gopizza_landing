<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $seoTitle ?? 'GOPIZZA - PIZZA DELIVERY' }}</title>
        <meta name="description" content="{{ $seoDescription ?? 'GOPIZZA - PIZZA DELIVERY' }}">
        <meta name="robots" content="index,follow">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $seoTitle ?? 'GOPIZZA - PIZZA DELIVERY' }}">
        <meta property="og:description" content="{{ $seoDescription ?? 'GOPIZZA - PIZZA DELIVERY' }}">
        <meta property="og:url" content="{{ url()->current() }}">
        @if (!empty($seoImage))
            <meta property="og:image" content="{{ $seoImage }}">
        @endif

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seoTitle ?? 'GOPIZZA - PIZZA DELIVERY' }}">
        <meta name="twitter:description" content="{{ $seoDescription ?? 'GOPIZZA - PIZZA DELIVERY' }}">
        @if (!empty($seoImage))
            <meta name="twitter:image" content="{{ $seoImage }}">
        @endif

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- JSON-LD for SEO -->
        <script type="application/ld+json">
            {
                "context": "https://schema.org",
                "type": "Restaurant",
                "name": "GOPIZZA",
                "url": "https://gopizza.com",
                "image": {!! json_encode([
                    $seoImage ?? asset('favicon.ico'),
                    asset('favicon.ico'),
                    asset('favicon.ico')
                ]) !!},
                "servesCuisine": ["Pizza", "Fast Food", "Italian"],
                "description": {!! json_encode($seoDescription ?? 'gopizza: selling pizza. Fresh, hot, and delivered fast.') !!},
                "telephone": "+60-123-456-789",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "123 Pizza Street",
                    "addressLocality": "Kuala Lumpur",
                    "addressCountry": "MY"
                },
                "sameAs": [
                    "https://www.facebook.com/gopizza",
                    "https://www.instagram.com/gopizza",
                    "https://www.twitter.com/gopizza"
                ],
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.6",
                    "reviewCount": "128"
                }
            }
        </script>

        <!-- You might link your CSS files here -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- Swiper CSS -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdi.css') }}">
        
    </head>
    <body>
           
        @include('member.template.topnav')
        <div class="main">
            @include('member.template.sitenav')
            @include($content)
        </div>
        @include('member.template.footer')

        

        <!-- You might link your JavaScript files here -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            let hideTimer;

            $('.menu-item-hover').hover(
                function () {
                    clearTimeout(hideTimer); // 进来就清掉定时器
                    $('.topnav-hover').stop(true, true).slideDown();
                },
                function () {
                    hideTimer = setTimeout(() => {
                    $('.topnav-hover').stop(true, true).slideUp();
                    }, 2000); // 离开后 3 秒才隐藏
                }
            );

            // 第一个 Swiper
            const swiper1 = new Swiper(".swiper1", {
                loop: true,
                pagination: {
                el: ".swiper-pagination1",
                clickable: true,
                },
            });

            // 第二个 Swiper
            const swiper2 = new Swiper(".swiper2", {
                loop: true,
                navigation: {
                nextEl: ".swiper-button-next2",
                prevEl: ".swiper-button-prev2",
                },
                autoplay: {
                delay: 2000,
                },
            });
        </script>
    </body>
</html>
