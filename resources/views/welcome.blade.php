<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder</title>
    <link rel="stylesheet" href="{{ asset('css/breeder.css') }}">
</head>

<body>
    <header>
        <div class="nav">
            <div>
                <img id="logo" src="{{ asset('images/logo.png') }}" alt="logo">
            </div>
            <ul class="nav-bar">
                <li><b>Home</b></li>
                <li>About</li>
                <li>Services</li>
                <li>Blog</li>
                <li>Contact</li>
            </ul>
            <div class="login">
                Login
                <img id="arrow" src="{{ asset('images/arrow.png') }}" alt="arrow">
            </div>
        </div>
    </header>

    <div>
        <img id="eclipseLeft" src="{{ asset('images/ellipse.png') }}" alt="eclipse">
    </div>

    <div class="section1">
        <div class="leftText">
            <div>
                <p id="lt1">Healthy Cats,</p>
                <p id="lt2">Happy Owners</p>
            </div>
            <div class="descSect1">
                Breeder Reserve is an app designed for cat lovers who want to easily and efficiently monitor and
                maintain their cat's health and become an essential tool to provide the best care for their furry
                friend.
            </div>
            <a href=""><button id="readMore">Read More<img id="aLight" src="{{ asset('images/arrowLight.png') }}"
                        alt="aLight"></button></a>

        </div>
        <img id="kucing" src="{{ asset('images/kucing_home.png') }}" alt="kucing_home">
    </div>

    <div class="section2">
        <div class="aboutUs">
            <p id="about">About</p>
            <p id="us">Us</p>
        </div>
        <div class="descSect2">
            Fusce feugiat venenatis nulla eget posuere. Nullam efficitur turpis id eros dignissim, nec euismod lacus
            efficitur. Fusce in ipsum augue. Praesent tempor, tellus quis rhoncus luctus, neque mi consectetur
            metus, vitae efficitur nisl sem ut nulla. Duis a diam sagittis tortor porttitor facilisis.
        </div>
        <img id="septSect2" src="{{ asset('images/Line.png') }}" alt="separator">
        <div class="supportSect2">
            Supported By
        </div>
        <div class="bottomSect2">
            <img id="wcf" src="{{ asset('images/WCF.png') }}" alt="wcf">
            <img id="duaCat" src="{{ asset('images/groupCat.png') }}" alt="2cat">
        </div>
        
    </div>

    <div class="eclipseRight">
        <img id="eclipseRight" src="{{ asset('images/ellipse2.png') }}" alt="eclipse2">
    </div>

    <div class="section3">
    </div>

</body>

</html>