<?php

session_start();
include("db.php");

$error = [];
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($name != "") {
        if (strlen($name) > 4) {
            if (strlen($password) > 6) {
                if ($password == $c_password) {
                    $password = md5($password);
                    $sql = "INSERT INTO users (name,email,password) VALUES ('" . $name . "','" . $email . "','" . $password . "')";
                    if ($conn->query($sql)) {
                        $success = true;
                    } else {
                        $error[] = "Server Error";
                    }
                } else {
                    $error[] = "Password not matched";
                }
            } else {
                $error[] = "Password too short";
            }
        } else {
            $error[] = "Invalid Name";
        }
    } else {
        $error[] = "Please type your Name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            background-image: url('Media/Mask\ Group\ 47.png');
        }
    </style>
    <link rel="stylesheet" href="CSS/Sign up.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="innerheader">
                <div class="logocontainer">
                   <a href="Log In.php"> 
                       <br><h1>RoadTrip <span>Srilanka</span> </h1></a>
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

    <div class="loginbox">
        

        <h1 class="logintitle">Sign Up</h1>

        <form class="form" action="" method="POST">
            <br><br><br>

           <!-- error alert -->
           <?php
                if (!empty($error)) {
                    foreach ($error as $key => $value) {
                        # code...
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                    <?php
                    }
                }
                if (isset($success)) {
                    ?>
                    <div class="success">Register successfully</div>
                <?php
                }
                ?>

            <input class="Username" type="text" name="name" required placeholder="Username">

            <input class="email" type="email" name="email" required placeholder="E-mail">

            <input class="pass" type="password" name="password" required placeholder="Password">

            <input class="pass" type="password"  name="c_password"  required placeholder="Confirm Password">
            <br><br>
            <input class="checkbox" type="checkbox" id="Agree"  value="Agreed">
            <label for="Terms"> <p class="chckboxtext"> I Agree to Terms and Conditions</p> </label><br>

            <br>

           <button type="submit" name="signup">Sign Up</button>

           <br>

          



        </form>

        <a href="Log In.php"><button class="btl" type="submit"> <p class="btltxt">Back To Login</p></button></a>
    </div>

</body>

</html>