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
    <link rel="stylesheet" href="CSS/Places.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Places</title>
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

    <div class="plcimg"><img class="bgimg" src="Media/Group 65.png" alt="img">
    </div>

    <div class="plctxt">
        <p class="plchead">Places</p>
        <br>
        <p class="plcdes">BEAUTIFUL PLACES ARE ALMOST ALIVE!</p>
    </div>

    <br><br><br><br><br>

    <div class="placescol">
        <div class="tot">
            <img class="totimg" src="Media/Group 64.png" alt="img">
            <div class="tottxt">
                <a class="Ahover" href="Temple of the tooth.php">
                    <p class="tothead">Temple of the tooth</p>
                </a>
                <br>
                <p class="totdes">Kandy, Sri Lanka.</p>

            </div>
        </div>

        <div class="Sigiriya">
            <img class="Sigiriyaimg" src="Media/Group 70.png" alt="img">
            <div class="Sigiriyatxt">
                <a class="Ahover" href="Sigiriya.php">
                    <p class="Sigiriyahead">Sigiriya</p>
                </a>
                <br>
                <p class="Sigiriyades">Sigiriya, Sri Lanka.</p>

            </div>
        </div>

        <div class="Ninearchbridge">
            <img class="nrbimg" src="Media/Group 71.png" alt="img">
            <div class="nrbtxt">
                <a class="Ahover" href="Nine Arch bridge.php">
                    <p class="nrbhead">Nine arch bridge</p>
                </a>
                <br>
                <p class="nrbdes">Ella, Sri Lanka.</p>

            </div>
        </div>

        <div class="Yala">
            <img class="yalaimg" src="Media/Group 72.png" alt="img">
            <div class="yalaatxt">
                <a class="Ahover" href="Yala.php">
                    <p class="yalahead">Yala</p>
                </a>
                <br>
                <p class="yalades">Yala, Sri Lanka.</p>

            </div>
        </div>

        <div class="Galle Fort">
            <img class="gfimg" src="Media/Group 73.png" alt="img">
            <div class="gftxt">
                <a class="Ahover" href="Galle Fort.php">
                    <p class="gfhead">Galle Fort</p>
                </a>
                <br>
                <p class="gfdes">Galle, Sri Lanka.</p>

            </div>
        </div>

        <div class="Jaffna Fort">
            <img class="jfimg" src="Media/Group 74.png" alt="img">
            <div class="jftxt">
                <a class="Ahover" href="Jaffna.php">
                    <p class="jfhead">Jaffna Fort</p>
                </a>
                <br>
                <p class="jfdes">Jaffna, Sri Lanka.</p>

            </div>
        </div>




    </div>

    <div class="smbttn">
        <a href="Tours.php">
            <button class="sm"> <p class="smtxt"> See More </p> </button>
        </a>
    </div>

    <br><br><br><br><br><br><br><br>

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