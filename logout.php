<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    }   

session_destroy();
echo "You have been logged out";
echo "<a href=\"login.php\">LOGIN</a>";
?>