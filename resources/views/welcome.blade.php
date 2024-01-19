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
        <hr class="solid">
        <div class="supportSect2">
            Supported By
        </div>
        <div class="bottomSect2">
            <img id="wcf" src="{{ asset('images/WCF.png') }}" alt="wcf">
            <img id="duaCat" src="{{ asset('images/groupCat.png') }}" alt="2cat">
        </div>

    </div>

    <div class="eclipseLeft2">
        <img id="eclipseLeft2" src="{{ asset('images/ellipse.png') }}" alt="eclipse">
    </div>

    <div class="eclipseRight">
        <img id="eclipseRight" src="{{ asset('images/ellipse2.png') }}" alt="eclipse2">
    </div>

    <div class="section3">
        <div class="ourServ">
            <p id="our">Our</p>
            <p id="serv">Services</p>
        </div>
        <div class="descSect3">
            Fusce feugiat venenatis nulla eget posuere. Nec euismod lacus efficitur.
            Fusce in ipsum augue. Praesent tempor, tellus quis rhoncus luctus.
        </div>
        <hr class="solid">
        <div class="cardSect3">
            <div class="card1">
                <div class="imgCard1">
                    <img id="imgCard1" src="{{ asset('images/icon.png') }}" alt="imgCard1">
                </div>
                <div class="textCard1">
                    <p id="titleCard1">Routine Health Checks</p>
                    <p id="descCard1">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card2">
                <div class="imgCard1">
                    <img id="imgCard2" src="{{ asset('images/icon2.png') }}" alt="imgCard2">
                </div>
                <div class="textCard1">

                    <p id="titleCard2">Routine Health Checks</p>
                    <p id="descCard2">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card3">
                <div class="imgCard1">
                    <img id="imgCard3" src="{{ asset('images/icon3.png') }}" alt="imgCard3">
                </div>
                <div class="textCard1">
                    <p id="titleCard3">Routine Health Checks</p>
                    <p id="descCard3">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card4">
                <div class="imgCard1">
                    <img id="imgCard4" src="{{ asset('images/icon4.png') }}" alt="imgCard4">
                </div>
                <div class="textCard1">
                    <p id="titleCard4">Routine Health Checks</p>
                    <p id="descCard4">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            
        </div>
        
    </div>
    <img id="kucing2" src="{{ asset('images/kucingSect3.png') }}" alt="kucing2">
</body>

</html>