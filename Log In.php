<?php

session_start();
include("db.php");
$errors=[];

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
    if($user_data=$conn->query($sql)){
        if($user_data->num_rows > 0){
            $_SESSION['user_logged']=true;
            header("Location: home.php");
            exit;
            //success login
        }else{
            $errors[]="Recheck Email & Password";
        }
    }else{
        $errors[]="Login Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Log In.css">
    <title>Log in</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="innerheader">
                <div class="logocontainer">
                    <h1>RoadTrip <span>Srilanka</span> </h1>
                </div>

                <ul class="socialmedia">
                    <a href="">
                        <li><img class="fb" src="Media/facebook.png" alt=""></li>
                    </a>
                    <a href="">
                        <li><img class="insta" src="Media/instagram.png" alt=""></li>
                    </a>
                    <a href="">
                        <li><img class="twitter" src="Media/twitter.png" alt=""></li>
                    </a>

                </ul>
            </div>
        </div>

    </header>

    <!-- login start-->

    <div class="img"> <img class="bg1" src="media/Mask Group 1.png" alt="">
        <div class="textt">
            <h1 class="text">Try Our New <br>Sri Lanka Trip Planner</h1>
            <br>
            <h2 class="text2"> create a day by day itinerary <br> customize to you. </h2>

        </div>
    </div>
    <!--
    <div class="rec"></div>
-->
    <div class="loginbox">



        <h1 class="logintitle">Sign In</h1>

        <form class="form" action="" method="POST">
            <br><br><br>
            <?php
                if (!empty($errors)) {
                    foreach ($errors as $key => $value) {
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                <?php
                    }
                }
                ?>

            <input class="email" type="email" name="email" required placeholder="E-mail">

            <input class="pass" type="password" name="password" required placeholder="Password">

            <br><br><br><br>

            <button type="submit" name="login">Sign In</button>
            <button type="submit"><a href="Sign Up.php">Sign Up</a></button>


        </form>
    </div>


    <!-- login over-->

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--body text-->

    <p class="centertext">Easy to use , easy to browse</p>

    <!--body img-->

    <br><br><br><br>


    <table class="cater">
        <tr>
            <div class="sponser1">
                <td><img class="cat1" src="Media/map.png" alt="">
                    <p class="icon">Get a personalized trip</p>
                </td>
            </div>
            <div class="sponser2">
                <td><img class="cat2" src="Media/date.png" alt="">
                    <p class="icon1">Customize it</p>
                </td>
            </div>
            <div class="sponser3">
                <td><img class="cat3" src="Media/content-management-system.png" alt="">
                    <p class="icon2">Manage it</p>
                </td>
            </div>
        </tr>
    </table>

    <br>

    <table class="phara1">
        <tr>
            <div class="ph1">
                <td>
                    <p class="sen1"> A complete day by day itinerary <br> based on your preferences</p>
                </td>
            </div>
            <div class="ph2">
                <td>
                    <p class="sen2">Refine your trip. We'll find the <br> best routes and schedules</p>
                </td>
            </div>
            <div class="ph3">
                <td>
                    <p class="sen3">Everything in one place. <br> Everyone on the same page.</p>
                </td>
            </div>
        </tr>
    </table>

    <br><br>

    <div class="box"></div>

    <br><br><br>

    <h1 class="topic1">Trending Destinations</h1>

    <br><br>

    <div class="imgcol">

        <div class="image">
            <img class="image__img" src="Media/Mask Group 2.png" alt="Kandy">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Kandy</div>
                <p class="image__description">
                    Kandy is a large city in central Sri Lanka
                </p>
            </div>
        </div>
        
         <br><br><br>      

        <div class="image">
            <img class="image__img" src="Media/Mask Group 3.png" alt="Galle">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Galle</div>
                <p class="image__description">
                    Galle is a city on the southwest coast of Sri Lanka
                </p>
            </div>
        </div>

        <br><br><br>

        <div class="image">
            <img class="image__img" src="Media/Mask Group 4.png" alt="Ella">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Ella</div>
                <p class="image__description">
                    The area has a rich bio-diversity, dense with numerous varieties of flora and fauna
                </p>
            </div>
        </div>

        <br><br><br>        

        <div class="image">
            <img class="image__img" src="Media/Mask Group 5.png" alt="Jaffna">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Jaffna</div>
                <p class="image__description">
                    Jaffna is a city on the northern tip of Sri Lanka
                </p>
            </div>
        </div>

        <br><br><br>

        <div class="image">
            <img class="image__img" src="Media/Mask Group 6.png" alt="Colombo">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Colombo</div>
                <p class="image__description">
                    Colombo is the commercial capital and largest city of Sri Lanka by population
                </p>
            </div>
        </div>


    </div>
    </div>


    </div>

    <br><br>


    <a href="">
        <div class="rec2">
            <p class="smtitle">See More</p>
        </div>
    </a>
    <br><br>





</body>

</html>