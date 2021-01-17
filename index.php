<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Providence Mennonite Church</title>
</head>

<body>
    <header class="main-header">
        <nav class="nav-normal">
            <div class="logo">
                <img src="./img/logo.svg" alt="cross">
            </div>
            <ul>
                <li><a class="button" href="#values">Values</a></li>
                <li><a class="button" href="#history">History</a></li>
                <li><a class="button" href="#time-events">Times and Events</a></li>
                <li><a class="button" href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-mobile">
            <button id="burger" class="open-main-nav">
                <span class="burger"></span>
            </button>
            <nav class="main-nav" id="main-nav">
                <ul>
                    <li><a id="mobile-close" href="#values">Values</a></li>
                    <li><a id="mobile-close1" href="#history">History</a></li>
                    <li><a id="mobile-close2" href="#time-events">Events</a></li>
                    <li><a id="mobile-close3" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="intro">
        <div class="intro-text" data-aos="fade-right" data-aos-duration="600">
            <h1>WELCOME TO <br> PROVIDENCE MENNONITE <br> CHURCH</h1>
            <div class="intro-button" data-aos="fade-up-right" data-aos-duration="700">
                <a href="#time-events">Join Us</a>
            </div>
        </div>
        <div class="intro-image" data-aos="fade-up" data-aos-duration="800">
            <img src="./img/church.svg" alt="church">
        </div>
    </section>
    <section class="values" id="values">
        <div class="values-title">
            <h2>Our Values</h2>
        </div>
        <div class="card-container">
            <div class="card" data-aos="flip-left" data-aos-duration="1000">
                <div class="card-image">
                    <?php include("../newChurch/img/family.svg"); ?>
                </div>
                <div class="card-title">
                    <h4>Family</h4>
                </div>
                <div class="card-text">
                    <p>We may only be a small church but we are always willing to be there for one another. If
                        someone new comes in we welcome them as if they have been there for years. </p>
                </div>
            </div>
            <div class="card" data-aos="flip-up" data-aos-duration="1000">
                <div class="card-image">
                    <?php include("../newChurch/img/community.svg"); ?>
                </div>
                <div class="card-title">
                    <h4>Community</h4>
                </div>
                <div class="card-text">
                    <p>We may only be a small church but we are always willing to be there for one another. If
                        someone new comes in we welcome them as if they have been there for years. </p>
                </div>
            </div>
            <div class="card" data-aos="flip-right" data-aos-duration="1000">
                <div class="card-image">
                    <?php include("../newChurch/img/faith.svg"); ?>
                </div>
                <div class="card-title">
                    <h4>Faith</h4>
                </div>
                <div class="card-text">
                    <p>We may only be a small church but we are always willing to be there for one another. If
                        someone new comes in we welcome them as if they have been there for years. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="history" id="history">
        <div class="history-title">
            <h2>Our History</h2>
        </div>
        <div class="history-container">
            <div class="history-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Cras ornare arcu dui vivamus arcu felis bibendum ut. Venenatis
                    cras sed felis eget velit aliquet sagittis. Quis lectus nulla at volutpat diam ut venenatis
                    tellus in. Gravida dictum fusce ut placerat orci nulla. Egestas maecenas pharetra convallis
                    posuere morbi leo urna. Dolor sit amet consectetur adipiscing elit ut aliquam purus. Felis
                    imperdiet proin fermentum leo vel orci porta non pulvinar. Ac tincidunt vitae semper quis. Vitae
                    turpis massa sed elementum tempus egestas. Urna nunc id cursus metus aliquam eleifend mi in
                    nulla. Turpis egestas pretium aenean pharetra magna ac. Sit amet massa vitae tortor condimentum
                    lacinia quis vel. In hac habitasse platea dictumst quisque sagittis. Ipsum dolor sit amet
                    consectetur adipiscing elit pellentesque habitant. Integer feugiat scelerisque varius morbi enim
                    nunc faucibus a. Dolor purus non enim praesent. Lobortis feugiat vivamus at augue eget arcu
                    dictum varius. Tristique sollicitudin nibh sit amet commodo.</p>
            </div>
            <div class="history-img">
                <img src="./img/cross.svg" alt="cross">
            </div>
        </div>
    </section>
    <section class="times-and-events" id="time-events">
        <h2>Times and Events</h2>
        <div class="join-us">
            <h3>Join Us Every Sunday</h3>
            <p>Sunday School: 9:00 a.m. - 10:00 a.m. <br> Church Service: 10:15 a.m. - 11:15 a.m.</p>
        </div>
        <div class="address">
            <h3>Our Address</h3>
            <p>109 South Mennonite Rd, <br> Collegeville, PA 19426</p>
        </div>
        <div class="upcoming-events">
            <h3>Upcoming Events</h3>
            <div class="event-list">
                <ul>
                    <li>March 30 - Service at Sanatoga Manor</li>
                    <li>October 16 - Pancake Breakfast at the Church</li>
                    <li>July 5 - Maturing Pilgrams</li>
                    <li>Febuary 21 - Service at the Collegeville Landing</li>
                    <li>December 22 - Christmas Service at the Church</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <h3>Give Us a Call</h3>
            <p>610-489-8179</p>
        </div>
    </section>
    <footer>
        <ul>
            <li><a href="#time-events">Times and Events</a></li>
            <li><a href="#values">Our Values</a></li>
            <li><a href="#history">Our History</a></li>
        </ul>
        <p>&copy; Providence Mennonite Church 2020. All rights reserved.</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>