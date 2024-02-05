<?php
session_start();
if(!isset($_SESSION["customer"])){
    header("location: index.php");
}

?>
