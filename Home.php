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
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Verdana, sans-serif;
        }
        
        .mySlides {
            display: none;
        }
        
        img {
            vertical-align: middle;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 19200px;
            max-height: 830px;
            position: relative;
            margin: auto;
        }
        /* Caption text */
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active {
            background-color: #717171;
        }
        /* Fading animation */
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
    <link rel="stylesheet" href="CSS/Home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
<header>
        <div class="header">
            <div class="innerheader">
                

                <ul class="pages">
                    <a class="" href="#">
                        <li><i class="fas fa-search"></i></li>
                    </a>
                    <a class="hah" href="logout.php">
                        <li>Log Out</li>
                    </a>
                    
                    </a>
                </ul>

            </div>
        </div>
    </header>

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

    <div class="openbg">
        <div><video class="vidbg" src="Media/Final Intro.mp4" autoplay loop muted></video>
            <div class="imgtxt">
                <div class="des1">
                    <p class="line1">Never let your memories <br> be greater than your
                    </p>
                </div>
                <div class="des2">
                    <p class="line2"> Dreams </p>
                </div>

                <div class="bttn">
                    <a href="Places.php"> <button class="exbttn"> <p class="extxt"> Explore </p> </button> </a>
                </div>
            </div>

        </div>

    </div>

    <br>
    <div>
        <p class="pphead">Popular Places</p>
    </div>


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

        <div class="smbttn">
            <a href="Tours.php">
                <button class="sm"> <p class="smtxt"> See More </p> </button>
            </a>
        </div>

        <br><br><br><br><br><br><br><br>


    </div>

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

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="Media/Export/1.jpg" style="width:100%">
            <div class="text">“Once a year, go someplace you’ve never been before.”</div>
        </div>

        <div class="mySlides fade">

            <img src="Media/Export/2.jpg" style="width:100%">
            <div class="text">“Never let your memories be greater than your dreams.”</div>
        </div>

        <div class="mySlides fade">

            <img src="Media/Export/4.jpg" style="width:100%">
            <div class="text"> “It is better to travel well than to arrive.”</div>
        </div>

        <div class="mySlides fade">

            <img src="Media/Export/3.jpg" style="width:100%">
            <div class="text">“Do not dare not to dare.”</div>
        </div>

        <div class="mySlides fade">

            <img src="Media/Export/5.jpg" style="width:100%">
            <div class="text">“A mind that is stretched by a new experience can never go back to its old dimensions.”</div>
        </div>

    </div>
    <br>


    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>



    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3800); // Change image every  3.8 seconds
        }
    </script>

    <!--https://www.w3schools.com/howto/howto_js_slideshow.asp-->

    <br><br><br><br><br><br><br><br><br>

    <div class="partnership">
        <div class="bgbox">
            <br><br>
            <div>
                <p class="ptnrhead">Partnerships</p>
            </div>

            <div class="ptnrlogos">
                <img class="partnerlogo" src="Media/Logo/Partners Logo.png" alt="">
            </div>
        </div>
    </div>

    <br><br><br><br><br>

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

    <br><br><br>

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