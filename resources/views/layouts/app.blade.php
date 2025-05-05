<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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

    <footer>
        @if (Request::is('/'))
            <div class="footer-img">
                <img class="fit-img" src="{{ asset('assets/images/footer/shark.png') }}" alt="">
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
                <a href="/contact">Contact Us</a>
                <a href="/about">About Us</a>
            </div>
        </div>
    </footer>

</body>

</html>