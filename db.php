<?php
$host = "localhost";
$user = "root";
$database = "rtsl";
$password = "";

if ($conn = new mysqli($host, $user, $password, $database)) {
    //connection successful
} else {
    //error message in database connection
    echo 'Database Error';
    exit;
}
?>