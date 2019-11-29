<?php 
session_start();
session_destroy();
echo "You have been logged out" . "<br>";
echo "<a href=\"index.php\">LOGIN</a>";
?>