<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/index.css') }}" >
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="page">
        <div class="page__container">


            <header class="header">
                <a href="#" class="header__logo-link">
                    <img src="images/logo.png" alt="Логотип" class="header__logo-icon">
                    <span class="header__logo-name">Test Task</span>
                </a>
            <div class="header__burger-container">
                <span class="header__burger-span"></span>
                <span class="header__burger-span"></span>
                <span class="header__burger-span"></span>
            </div>
            <div class="header__container">

                <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__list-item">
                    <a href="/about" class="header__link">
                        About us
                    </a>
                    </li>
                    <li class="header__list-item">
                    <a href="#" class="header__link">
                        Features
                    </a>
                    </li>
                    <li class="header__list-item">
                    <a href="#" class="header__link header__link_active">
                        Pricing
                    </a>
                    </li>
                    <li class="header__list-item">
                    <a href="#" class="header__link">
                        Product
                    </a>
                    </li>
                    <li class="header__list-item">
                    <a href="#" class="header__link header__link_type_active">
                        Contact
                    </a>
                    </li>
                </ul>
                </nav>

                <div class="header__auth auth">
                <a href="#" class="header__link auth__login">Login</a>
                <a href="#" class="header__link auth__singup">Sign Up</a>
                </div>

            </div>
            </header>

            @yield('main-content')

        </div>
    </body>
</html>
