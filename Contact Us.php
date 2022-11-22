<?php
session_start();
include("./db.php");
?>
<?php
if (!isset($_SESSION['user_logged'])) {
    header('Location:Sign Up.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/ContactUs.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Contact Us</title>
</head>

<body>

    <header>
        <div class="header">
            <div class="innerheader">
                <div class="logo">

                    <!-- <h1>RoadTrip <span>Srilanka</span> </h1>-->
                    <a href="Home.php"> <img class="hlogort" src="Media/Logo/Logo 1 .png" alt=""></a>
                </div>

                <ul class="pages">
                    <a class="hah" href="Gallery.php">
                        <li>Gallery</li>
                    </a>
                    <a class="hah" href="Places.php">
                        <li>Places</li>
                    </a>
                    <a class="hah" href="Tours.php">
                        <li>Tours</li>
                    </a>
                    <a class="hah" href="About Us.php">
                        <li>About</li>
                    </a>
                    <a class="hah" href="Contact Us.php">
                        <li>Contact</li>
                    </a>
                </ul>

            </div>
        </div>
    </header>

    <script>
        //sticky navigation Bar
        $(document).ready(function() {
            $('.header').sticky();
        });
    </script>

    <div class="contactusimg"><img class="bgimg" src="Media/Group 63.png" alt="img">
    </div>

    <div class="contactustxt">
        <p class="contactushead">Contact Us</p>
        <br>
        <p class="contactusdes">SAY HELLO TO US AND MAKE A JOYFUL MOVEMENTS</p>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <iframe class="" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15842.940807651765!2d79.84676723435827!3d6.922225121321414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!4m5!1s0x3ae2596aff659553%3A0x3ac0934181602b6c!2sSeema%20Malakaya%2C%20Sir%20James%20Pieris%20Mawatha%2C%20Colombo!3m2!1d6.9169263!2d79.8546032!5e0!3m2!1sen!2slk!4v1627325093918!5m2!1sen!2slk"
        width="100%" height="720" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <br><br><br><br><br><br><br><br>

    <div class="cuform">
        <form class="contactform" action="" method="GET">
            <input class="Messege" type="text" placeholder="Messege">
            <br> <br><br>
            <input class="name" type="text" placeholder="Name">
            <input class="email" type="Email" placeholder="Email">
            <br> <br><br>
            <input class="subject" type="text" placeholder="Subject">
            <br><br><br><br>
            <button class="send" type="submit"> <p class="bttntxt"> Send </p> </button>
        </form>
    </div>

    <div class="cudes">
        <p class="contactusdes1">
            Every year, when the weather starts to turn chilly in our corner of the world,<br> we find that the content we produce for clients at World Words begins <br> to take on a distinctly seasonal slant. All of a sudden, the travel content agenda
            is <br> dominated by all things wintery, from celebrations like Christmas and New Year, <br> to activities like winter sports. <br> <br> Our winter travel content is for everyone to enjoy. Disappointed you’re not cosied up in <br> a chalet
            by a roaring log fire? Read about our Alpine adventures in <br> St. Moritz and pretend you are. Rather have some winter sun? Read our guide on the <br> Greek Islands and all the advent adventures they have to offer. Or maybe you’d rather forego<br>            winter altogether and enjoy another (even hotter) summer. Read our feature on <br> <br> Australia and its weird, wonderful wildlife Below are short extracts from just five of the guides we’ve written over the last few months – that’s one for
            each of Asia, North America, Europe, The Caribbean and Africa. Simply scroll down to read them. If you want to enjoy the full guides – and get some great holiday offers – you can click the links through to the loveholidays website
        </p>
    </div>

    <br><br><br><br>

    <!--FOOTER-->
    <footer class="footer">
        <div class="l-footer">
            <h1>
                <img class="flogo" src="Media/Logo/Logo 1 .png" alt=""></h1>
            <p class="fdes1">
                <br><br> Plan your next trip, tour or vacation in Sri Lanka with
                <br> Sri Lanka Travel Planner. I can help you design the perfect
                <br> vacation. Use Sri Lanka Travel Planner to get a personalized day by
                <br> day itinerary for your vacation</p>
            <br><br>
            <div class="fSocials">
                <a href="www.facebook.com/rtsl"><i class="fab fa-facebook-f"></i></a>
                <a href="www.instagram.com/rtsl"> <i class="fab fa-instagram"></i> </a>
                <a href="www.twitter.com/rtsl"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <ul class="r-footer">

            <li class="fhead">
                <p class="fhead1">Sitemap</p>
                <ul class="box h-box">
                    <div class="1st">
                        <li><a class="fohver1" href="Gallery.php">Gallery</a></li>
                        <li><a class="fohver1" href="Places.php">Places</a></li>
                        <li><a class="fohver1" href="Tours.php">Tours</a></li>
                        <li><a class="fohver1" href="Contact Us.php">Contact</a></li>
                        <li><a class="fohver1" href="About Us.php">About</a></li>
                    </div>

                </ul>
            </li>
            <li class="fhead">
                <p class="fhead1">Trending Destinations</p>
                <ul class="box">
                    <li><a class="fohver1" href="Temple of the tooth.php">Kandy</a></li>
                    <li><a class="fohver1" href="Galle Fort.php">Galle</a></li>
                    <li><a class="fohver1" href="Nine Arch bridge.php">Ella</a></li>
                    <li><a class="fohver1" href="Jaffna.php">Jaffna</a></li>
                </ul>
            </li>
            <li class="fdes2">
                <br> 256 Highlevel Road, Colombo 05. <br> (+94) ( 011) 2825709 <br> contact@roadtripsl.com

            </li>
        </ul>
        <div class="b-footer">
            <p>
                All rights reserved by ©RoadTrip SriLanka 2021 </p>
        </div>
    </footer>
</body>

</html>