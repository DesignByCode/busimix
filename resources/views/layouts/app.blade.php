<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="nav nav--fixed nav--shadow-light">
            <div class="nav__wrapper">
                <div class="nav__no__brand">
                    <a href="{{ url('/') }}">
                        <img class="nav__logo nav__logo__large" src="{{ asset('img/busimix-logo.svg') }}" alt="{{ config('app.name') }}">
                        <img class="nav__logo nav__logo__small" src="{{ asset('img/busimix-logo-small.svg') }}" alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="nav__navicon"></div>
                <div class="nav__links__wrapper nav__links--right">
                    <ul class="nav__links">
                        <li class="nav__links__item"><a href="{{ route('login') }}">{{ __('Home') }}</a></li>
                        <li class="nav__links__item"><a href="{{ route('login') }}">{{ __('Services') }}</a></li>
                        <li class="nav__links__item"><a href="{{ route('login') }}">{{ __('Routes') }}</a></li>
                        <li class="nav__links__item"><a href="{{ route('login') }}">{{ __('About Us') }}</a></li>
                        <li class="nav__links__item"><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @if (request()->is('/'))

            <div class="hero">
                <div class="hero__wrapper">
                    <div class="wrapper">
                        <div class="row">
                            <div class="md-col-9 md-offset-3">
                                <img class="hero__text responsive__image" src="{{ asset('/img/herotext.svg') }}" alt="Hero Text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif

        <main class="main">
            @yield('content')
        </main>


        <footer class="footer">
            <div class="wrapper">
                <div class="row">
                    <div class="md-col-6">Designed and Developed by <a target="_blank" href="https://designbycode.co.za">DesignByCode</a></div>
                </div>
            </div>
        </footer>


    </div><!-- #app -->
</body>
</html>
