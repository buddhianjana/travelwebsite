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
    <link rel="stylesheet" href="CSS/Galle Fort.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Galle Fort</title>
</head>

<body>

    <header>
        <div class="header">
            <div class="innerheader">
                <div class="logo">

                    <!-- <h1>RoadTrip <span>Srilanka</span> </h1>-->
                    <a href=""></a> <img class="hlogort" src="Media/Logo/Logo 1 .png" alt=""></a>
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

    <div><img class="bgimg" src="Media/placesimg/Group 68.png" alt="img">
    </div>

    <div class="bgtxt">
        <p class="bghead">Galle Fort</p>
        <br>
        <p class="bgdes">In the Bay of Galle on the southwest coast of Sri Lanka</p>
    </div>

    <br><br><br><br><br><br><br><br>

    <div class="contentimgcol">
        <img class="imgcol" src="Media/placesimg/Group 69.png" alt="img">
    </div>

    <div class="contenttxt">
        <p class="phratxt">Galle Fort in the Bay of Galle on the southwest coast of Sri Lanka, <br> was built first in 1588 by the Portuguese, then extensively fortified
            <br> by the Dutch during the 17th century from 1649 onwards. It is a historical,
            <br><br><br>archaeological and architectural heritage monument, which even after
            <br> more than 432 years maintains a polished appearance, due to extensive <br> reconstruction work done by Archaeological Department of Sri Lanka.
            <br> The fort has a colourful history, and today has a multi-ethnic and <br> multi-religious population. The Sri Lankan government and many
            <br> Dutch people who still own some of the properties inside the fort are <br>looking at making this one of the modern wonders of the world.
            <br>
            <br> The heritage value of the fort has been recognized by the UNESCO <br> and the site has been inscribed as a cultural heritage UNESCO
            <br> World Heritage Site under criteria iv, for its unique exposition <br>of "an urban ensemble which illustrates the interaction <br> of European architecture and South <br> Asian traditions from the 16th <br>to the 19th centuries.
            <br><br>
            <br> The Galle Fort,also known as the Dutch Fort or the "Ramparts of Galle", <br>withstood the Boxing Day tsunami which damaged
            <br> part of coastal area Galle town. It has been since restored.

        </p>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- NewsLetter-->

    <div>
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