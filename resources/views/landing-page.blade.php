<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta description="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restiloc</title>
    @vite("resources/css/app.css")
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body data-theme="{{ $theme }}">
    <header class="header">
        <div class="wrapper">
            <div class="application__logo">
                <img class="logo-full" src="/static/images/logo-full.svg"/>
                <img class="minimized-logo" src="/static/images/logo-minimized.svg"/>
            </div>
            <div class="theme__switcher" id="{{ $theme }}">
                <img src="/static/images/{{($theme) . '.svg'}}" data-theme="{{ $theme }}" data-next="{{ ($theme) === 'light' ? 'dark' : 'light' }}">
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <div class="application__presentation">
                <div class="container">
                    <div class="text_main app-title">Design Your Perfect Day.</div>
                    <div class="subtext">Get the best of health and fitness, all in one place. Download the app today !</div>
                    <a class="playstore__download" href='http://play.google.com/store/?pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
                </div>
            </div>
            <div class="application__illustration">
                <img src="/static/images/{{$theme}}-iphone.svg"/>
            </div>
        </div>
    </main>
    @vite("resources/js/app.js")
</body>
</html>   