<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder</title>
    <link rel="stylesheet" href="{{ asset('css/breeder.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="imgCard">
                    <img id="imgCard1" src="{{ asset('images/icon.png') }}" alt="imgCard1">
                </div>
                <div class="textCard">
                    <p id="titleCard1">Routine Health Checks</p>
                    <p id="descCard1">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card2">
                <div class="imgCard">
                    <img id="imgCard2" src="{{ asset('images/icon2.png') }}" alt="imgCard2">
                </div>
                <div class="textCard">

                    <p id="titleCard2">Vaccination Record</p>
                    <p id="descCard2">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card3">
                <div class="imgCard">
                    <img id="imgCard3" src="{{ asset('images/icon3.png') }}" alt="imgCard3">
                </div>
                <div class="textCard">
                    <p id="titleCard1">Diet And Weight Monitoring</p>
                    <p id="descCard1">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>
            <div class="card4">
                <div class="imgCard">
                    <img id="imgCard4" src="{{ asset('images/icon4.png') }}" alt="imgCard4">
                </div>
                <div class="textCard">
                    <p id="titleCard1">Recording Kitten Growth</p>
                    <p id="descCard1">Pellenque nunc nisi, rhos in pulvinar drerit et dolor.</p>
                </div>
            </div>

        </div>

    </div>
    <img id="kucing2" src="{{ asset('images/kucingSect3.png') }}" alt="kucing2">


    <div class="section4">
        <div class="topSection4">
            <p id="articles">Articles</p>

            <div class="descSect4">
                Checkout latest news & articles
            </div>
            <div class="buttonPrevNext">
                <button id="prev"><img id="prevNextImg" src="{{ asset('images/arrow-left.png') }}" alt="prevButton">
                </button>
                <button id="next"><img id="prevNextImg" src="{{ asset('images/arrow-right.png') }}" alt="nextButton">
                </button>
            </div>
            <hr class="solidSect4">
        </div>
        <div class="cardSect4">
            <div class="card1S4">
                <div class="imgcard1S4">
                    <img id="imgcard1S4" src="{{ asset('images/sect4.png') }}" alt="imgcard1S4">
                </div>
                <div class="textcard1S4">
                    <p id="titlecard1S4">Cras viverra faucibus pharetra.</p>
                    <p id="desccard1S4">Mauris lorem felis, pulvinar dapibus ante vel, aliquet lacinia augue. Sed
                        ultricies dignissim posuere. Suspendisse nisi quam.</p>
                </div>
                <hr class="solidSect4_2">
                <div class="genreCard">
                    <button id="buttonGenre">
                        <p id="textGenre">Health</p>
                    </button>
                    <button id="buttonGenre">
                        <p id="textGenre">Treatment</p>
                    </button>
                </div>
            </div>
            <div class="card1S4">
                <div class="imgcard1S4">
                    <img id="imgcard1S4" src="{{ asset('images/sect4_2.png') }}" alt="imgcard1S4">
                </div>
                <div class="textcard1S4">
                    <p id="titlecard1S4">Cras viverra faucibus pharetra.</p>
                    <p id="desccard1S4">Mauris lorem felis, pulvinar dapibus ante vel, aliquet lacinia augue. Sed
                        ultricies dignissim posuere. Suspendisse nisi quam.</p>
                </div>
                <hr class="solidSect4_2">
                <div class="genreCard">
                    <button id="buttonGenre">
                        <p id="textGenre">Health</p>
                    </button>
                    <button id="buttonGenre">
                        <p id="textGenre">Treatment</p>
                    </button>
                </div>
            </div>
            <div class="card1S4">
                <div class="imgcard1S4">
                    <img id="imgcard1S4" src="{{ asset('images/sect4_3.png') }}" alt="imgcard1S4">
                </div>
                <div class="textcard1S4">
                    <p id="titlecard1S4">Cras viverra faucibus pharetra.</p>
                    <p id="desccard1S4">Mauris lorem felis, pulvinar dapibus ante vel, aliquet lacinia augue. Sed
                        ultricies dignissim posuere. Suspendisse nisi quam.</p>
                </div>
                <hr class="solidSect4_2">
                <div class="genreCard">
                    <button id="buttonGenre">
                        <p id="textGenre">Health</p>
                    </button>
                    <button id="buttonGenre">
                        <p id="textGenre">Treatment</p>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <div class="section5">
        <div class="leftSect5">
            <img id="imgSec5" src="{{ asset('images/kucingSect5.png') }}" alt="img-kucing-kuning">
        </div>
        <div class="rightSect5">
            <div class="txtSect5">
                <p id="record">Record And Monitor The</p>
                <div class="growthText">
                    <p id="growth">Growth</p>
                    <p id="furry">Of Your Furry Friend</p>
                </div>
                <hr class="solidSect5">
                <div class="descSect5">
                    Suspendisse dapibus ante vel felis condimentum finibus. Aliquam imperdiet enim eu augue porttitor,
                    et tempor dolor facilisis. Morbi fermentum efficitur maximus. Nam convallis egestas odio nec
                    pharetra. Sed bibendum sed ligula nec pellentesque
                </div>
                <p id="freeApp">Get the free app only at</p>
                <div class="iconApp">
                    <img id="appStore" src="{{ asset('images/appstore.png') }}" alt="appstore">
                    <img id="playStore" src="{{ asset('images/playstore.png') }}" alt="playstore">
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="leftFooter">
                <img id="logoFooter" src="{{ asset('images/BR.png') }}" alt="logo-breeder-research"><br>
                <img id="txtLogoFooter" src="{{ asset('images/BR-Txt.png') }}" alt="logoText-breeder-research">
                <div class="descFooter">
                    Breeder Reserve is an app designed for cat lovers who want to monitor and maintain their cat's
                    health easily and efficiently.
                </div>
                <div class="iconFooter">
                    <img id="iconWcf" src="{{ asset('images/iconwcf.png') }}" alt="icon-wcf">
                    <img id="iconTwitter" src="{{ asset('images/twitter.png') }}" alt="icon-twitter">
                    <img id="iconFB" src="{{ asset('images/facebook.png') }}" alt="icon-fb">
                    <img id="iconIG" src="{{ asset('images/instagram.png') }}" alt="icon-ig">
                </div>
            </div>
            <div class="middleFooter">
                <ul class="linksnOther">
                    <li><b>Links</b></li>
                    <div class="deriv">
                        <li id="aboutFooter">About</li>
                        <li>Blog</li>
                        <li>Service</li>
                    </div>
                </ul>
            </div>
            <div class="rightFooter">
                <ul class="linksnOther">
                    <li><b>Other</b></li>
                    <div class="deriv">
                        <li>Contact</li>
                        <li>Terms & Conditions</li>
                        <li>Privacy Policy</li>
                    </div>
                </ul>
            </div>
            
        </div>
        <hr class="solidFooter">
        <div class="bottom-bar">
            <p>Copyright &copy; Breeder Reserve 2024 - All Right Reserved</p>
        </div>
    </footer>
</body>

</html>