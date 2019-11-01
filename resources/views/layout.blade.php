<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    @yield('head')

</head>
<body>
    <header class="l-header l-flex">
        <div class="l-header__image-container">
            <img src="" alt="" class="l-header__image">
        </div>
        <nav class="l-navigation">
            <ul class="l-navigation__list l-flex">
                <li class="l-navigation__item"><a href="/projects" class="l-navigation__link">Projects</a></li>
                <li class="l-navigation__item"><a href="/testimonials" class="l-navigation__link">Testimonials</a></li>
                <li class="l-navigation__item"><a href="/resume" class="l-navigation__link">Resume</a></li>
                <li class="l-navigation__item"><a href="/about" class="l-navigation__link">About</a></li>
                <li class="l-navigation__item"><a href="/contact" class="l-navigation__link">Contact</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>Footer</footer>
</body>
</html>
