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
    <link rel="stylesheet" href="Css/Tours.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Tours</title>
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

    <div class="bgimgg"><img class="bgimg" src="Media/placesimg/Mask Group 28.png" alt="img">
    </div>

    <div class="bgtxt">
        <p class="bghead">Day Tours</p>
        <br>
        <p class="bgdes">Take only memories, leave only footprints</p>
    </div>

    <!-- Tours-->

    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 59.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Nine Arch <br> bridge</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 03 Days 02 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Arround Ella </p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 55 to 85, Medium - 90 to 125, Star - <br>
                                USD 130 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $285 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

    </div>

    <div class="hline"></div>

    <!--Tour Close-->


    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 60.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Yala</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 03 Days 02 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Arround Yala</p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 45 to 75, Medium - 80 to 115, Star - <br>
                                USD 120 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $250 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

    </div>


    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 61.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Temple <br> of the Tooth</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 02 Days 01 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Arround Kandy </p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 40 to 60, Medium - 70 to 100, Star - <br>
                                USD 120 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $240 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

    </div>


    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 62.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Sigiriya</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 02 Days 01 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Arround Sigiriya</p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 55 to 85, Medium - 90 to 125, Star - <br>
                                USD 130 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $285 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

    </div>

    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 63.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Galle Fort</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 04 Days 03 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Galle, Mirissa, Jungle Beach</p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 70 to 100, Medium - 115 to 145, Star - <br>
                                USD 150 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $315 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

    </div>

    <div class="Tours">

        <div class="timg">

            <img class="tourimg" src="Media/placesimg/Mask Group 64.png" alt="img">
        </div>


        <div class="thead">
            <p class="tourhead">Jaffna</p>
        </div>
        <br><br>
        <div class="redline"></div>
        <br><br>
        <div class="tdescription">
            <p class="line1"> <b> Duration </b> <span>  - 03 Days 02 Nights</p></span><br>
                <p class="line2"> <b> Route </b> <span>  - Arround Jaffna</p></span><br>
                    <p class="line3"> <b> Included </b> <span>   - Transportation, Guiding, Drinks</p></span><br>
                        <p class="line4"> <b> Not Included </b> <span>   - Entrance Fee, Hotel Fee</p></span><br>
                            <p class="line5"> <b> Hotel </b> <span>  - Small - USD 55 to 85, Medium - 90 to 125, Star - <br>
                                USD 130 Upwards (Per Night + bed & breakfast)</p></span><br>
                                <p class="line6"> <b> Price </b> <span>  - $285 (Maximum 02 Pax)</p></span>
        </div>

        <br><br> <br>

        <div class="button">
            <a href="Contact Us.php"> <button class="btn1"> <p class="btntxt"> Contact us for booking </p> </button></a>
        </div>

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

    <!-- scroll up button -->
    <button id="topbtn"><i class="fas fa-arrow-up"></i> <br> Top</button>

    <script>
    //scroll up button
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 40) {
                    $('#topbtn').fadeIn();
                } else {
                    $('#topbtn').fadeOut();
                }
            });
            $("#topbtn").click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 800);
            });
        });
    </script>

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