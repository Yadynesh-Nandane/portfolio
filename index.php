<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <title>Portfolio - Yadynesh Nandane</title>
</head>
<body class="portfolio_body">

        <div class="main">
            <header class="portfolio_header">
                <h3 class="portfolio_heading">Yadynesh</h3>
                <nav class="portfolio_nav" id="navtab">
                    <a class="portfolio home" href="#home">Home</a>
                    <a class="portfolio prtfolio" href="#prtfolio">Portfolio</a>
                    <a class="portfolio mywork" href="#mywork">My Work</a>
                    <a class="portfolio contact" href="#contact">Contact</a>
                </nav>
            </header>
            <section id="home" class="section s1">
                <h1 class="main_heading">
                    <a href="#prtfolio" class="portfolio_span">Yadynesh Nandane</a>
                </h1>
            </section>
            <section id="prtfolio" class="section s2">

                <div class="yd_bio">
                    <div class="info">
                        <p>I am <span>Yadynesh Nandane</span></span></p>
                    </div>
                    <div class="portfolio_image">
                        <img src="./img/ig1.png" alt="Yadynesh Nandane" class="prt_image">
                    </div>
                </div>
            </section>
            <section id="mywork" class="section s3"></section>
            <section id="contact" class="section s4"></section>
        </div>

    <!-- -------------------Full page js library-------------------------- -->
    <script src="./scripts/fullpage.min.js"></script>

    <!-- --------------------TweenMax Animation library-------------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" 
        integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" 
        crossorigin="anonymous">
    </script>
    
    <!-- ---------------------TimelineMax Animation library---------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" 
        integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" 
        crossorigin="anonymous">
    </script>
    <script src="./scripts/app.js"></script>
</body>
</html>