<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/mana-logo.svg') }}" />
	<link rel="icon" href="{{ asset('assets/images/logo-16.svg') }}"
		sizes="16x16" />
	<link rel="icon" href="{{ asset('assets/images/logo-32.svg') }}"
		sizes="32x32" />
	<link rel="icon" href="{{ asset('assets/images/logo-96.svg') }}"
		sizes="96x96" />
	<link rel="apple-touch-icon"
		href="{{ asset('assets/images/logo-180.svg') }}"
		sizes="180x180" />
	<link rel="icon" href="{{ asset('assets/images/logo-256.svg') }}"
		sizes="256x256" />
</head>

<body>
    <header>
        <div class="head">
            <a href="/"><img src="{{ asset('assets/images/logo.svg') }}" width="168" height="35" alt=""></a>
        </div>
    </header>

    <main id="mana">
        @yield('content')
    </main>

    <footer class="{{ (Request::is('contact') || Request::is('about')) ? 'footer-contact' : '' }}">
        @if (Request::is('/'))
            <div class="footer-shark">
                <img class="fit-img" src="{{ asset('assets/images/faq/shark.png') }}" alt="">
            </div>
        @elseif (Request::is('about'))
            <div class="footer-turtle">
                <img class="fit-img" src="{{ asset('assets/images/about/turtle.png') }}" alt="">
            </div>
        @endif
        <div class="footer__content">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/images/logo.svg') }}" width="297" height="63" alt=""></a>
            </div>
            <p>"In every ordinary breath, magic hides, waiting for those who believe."</p>
            <div class="social">
                <a href=""><img width="63" height="63" src="{{ asset('assets/images/x.svg') }}" alt=""></a>
                <a href=""><img width="63" height="63" src="{{ asset('assets/images/tele.svg') }}" alt=""></a>
            </div>
            <div class="footer__action">
                <a href="{{ route('contact') }}">Contact Us</a>
                <a href="{{ route('about') }}">About Us</a>
            </div>
        </div>
    </footer>

</body>

</html>