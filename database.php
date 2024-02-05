<?php

$hostname ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="loginregistermenu";
$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);
if(!$conn){
    die("Something went wrong.");
}
?>