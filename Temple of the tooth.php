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
    <link rel="stylesheet" href="CSS/Temple of the tooth.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Temple Of The Tooth</title>
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

    <div><img class="bgimg" src="Media/Mask Group 28.png" alt="img">
    </div>

    <div class="bgtxt">
        <p class="bghead">Temple Of The Tooth</p>
        <br>
        <p class="bgdes">Royal palace complex of the former Kingdom of Kandy</p>
    </div>


    <div class="contentimgcol">
        <img class="imgcol" src="Media/tot.png" alt="img">
    </div>

    <div class="contenttxt">
        <p class="phratxt"> Temple of the Sacred Tooth Relic commonly known <br> as the ශ්‍රී දළදා මාළිගාව (Glorious Tooth Temple) , is a
            <br> Buddhist temple in Kandy, Sri Lanka. It is located <br> in the royal palace complex of the former Kingdom of Kandy,
            <br> which houses the relic of the tooth of the Buddha. <br> Since ancient times,which houses the relic of the tooth of the
            <br> Buddha. Since ancient times,the relic has played an <br> important role in local politics because it is believed that
            <br> whoever holds the relic holds the governance of the country. <br>The relic was historically held by Sinhalese kings.
            <br>The temple of the tooth is a World Heritage Site <br> mainly due to the temple and the relic.
            <br>Bhikkhus of the two particular chapters, the Malwathu chapters
            <br> and Asgiri chaptersconduct daily worship in the inner chamber of the temple. Rituals are performed three times daily: at dawn, at noon,
            <br> and in the evenings. On Wednesdays,
            <br> there is a symbolic bathing of the relic with a <br> herbal preparation made from scented water and fragrant flowers
            <br> called Nanumura Mangallaya; this holy water is believed <br> to contain healing powers and is distributed to those present.

            <br><br> After the parinirvana of Gautama Buddha, according to the legend, <br> the tooth relic was preserved in Kalinga and smuggled
            <br>to the island by Princess Hemamali and her husband, Prince Dantha on <br> the instructions of her father King Guhasiva.

        </p>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- NewsLetter-->

    <div class="newsletterbg">
        <img class="nlbg" src="Media/Mask Group 17.png" alt="bg">
    </div>

    <div class="newslettertxt">
        <p class="nlhead">Subscribe Our Newsletter</p>
        <br>
        <p class="nldes">Subscribe newsletter to get offers and about <br> new places to discover.</p>
    </div>

    <div class="nl">
        <form class="nlform" action="" method="POST">
            <input class="Emailbox" type="Email" required placeholder="Your Email">
            <button class="subsbttn" type="submit"> <p class="bttntxt"> Subscribe </p> </button>

        </form>
    </div>

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