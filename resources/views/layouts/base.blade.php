<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta description="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restiloc - Vehicle expertise</title>
    @vite("resources/css/app.css")
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/ico/favicon-16x16.png">
    <link rel="manifest" href="/static/ico/site.webmanifest">
</head>
<body data-theme="{{ $theme }}">
    <header class="header">
        <div class="wrapper">
            <div class="application__logo">
                <img class="logo-full" src="/static/images/logo-full.svg"/>
                <img class="minimized-logo" src="/static/images/logo-minimized.svg"/>
            </div>
            <div class="container">
                <div class="theme__switcher" id="{{ $theme }}">
                    <img src="/static/images/{{ $theme }}.svg" data-theme="{{ $theme }}" data-next="{{ $theme === 'light' ? 'dark' : 'light' }}">
                </div>
            </div>
        </div>
    </header>
	<main>
		@yield('main')
    </main>
    @vite("resources/js/app.js")
</body>
</html>