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
    <link rel="stylesheet" href="CSS/About us.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>About Us</title>
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

    <div class="aboutusimg"><img class="bgimg" src="Media/Group 68.png" alt="">
    </div>

    <div class="aboutustxt">
        <p class="aboutushead">About Us</p>
        <br>
        <p class="aboutusdes">WE ARE COLLECTIVE GROUP OF TRAVELLERS AND THRILL SEEKERS</p>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="descript">
        <div class="head">
            <p class="ourstory">Our Story</p>
        </div>
        <br> <br><br>
        <div class="destxt">
            <p class="description">RoadTrip Sri Lanka Plan is a high-end tour operator dedicated to provide smooth and genuine travel experiences while maintaining <br> the best quality of service. We have been providing exceptional sightseeing experiences to numerous tourists
                to Sri Lanka for more <br> than 15 years, allowing them to discover and experience the interesting places in a fresh way while enjoying in incomparable luxury. <br> We provide a wide range of customised travel services since we are passionate
                about providing the greatest luxury trips and holidays. <br> Our luxury transportation services, which include high-end SUVs and a private tour guide, provide an unique cruising experience <br> throughout this beautiful island to the most
                attractive spots of your choice.
                <br><br><br><br> Your comfort is our first priority: we'll make sure that each transport is as comfortable as possible and delivers you to the finest possible place. <br> Our customized guided excursions will help you discover Sri Lanka's
                lesser-known gems. Our travel specialists collaborate to provide a stress-free, <br> tailored trip with total flexibility, unsurpassed personal attention, and perfect luxury facilities. Our pleasant and courteous driver <br> and private
                tour guides will take you on a journey through our country's rich history, scenery, culture, wildlife, food, and current attractions, <br> all personalized to your specific tastes. And you'll be entertained on these interesting excursions
                by gripping tales, hilarious anecdotes, <br> and fascinating trivia, making your trip a very pleasurable experience that will stay with you for a long time. Unlike other tour companies, <br> we don't just give you another private luxury
                trip. We provide customised trip packages to meet the discriminating preferences <br> of you and your group, thanks to our vast fleet and various alternatives to indulge in the luxury lifestyle. The RoadTrip Sri Lanka Plan <br> goes above
                and beyond to provide you with the one thing that counts most: a choice!


            </p>
        </div>
    </div>

    <br><br><br><br><br><br>

    <!-- hotel banners-->
    <div class="rec1"></div>

    <br><br><br>

    <div class="bannerimg">
        <img class="trainimg" src="Media/train.png" alt="train">
        <img class="hotelimg" src="Media/hotel.png" alt="hotel">
        <img class="earthimg" src="Media/planet-earth.png" alt="earth">
    </div>

    <div class="bannertext">
        <p class="cj">Comfortable Journey</p>
        <p class="lh">Luxuries Hotel</p>
        <p class="tg">Travel Guide</p>

    </div>
    <br><br>

    <div class="bannerph">
        <p class="ph1">A wonderful serenity has taken <br> to the possession of my <br> entire soul.</p>
        <p class="ph2">A wonderful serenity has taken <br> to the possession of my <br> entire soul.</p>
        <p class="ph3">A wonderful serenity has taken <br> to the possession of my <br> entire soul.</p>
    </div>

    <br><br><br>

    <div class="rec2"></div>

    <br><br><br>

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
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""> <i class="fab fa-instagram"></i> </a>
                <a href=""><i class="fab fa-twitter"></i></a>
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