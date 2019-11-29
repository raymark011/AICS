<?php
//including the database connection file
include("myconfig.php");

//getting id of the data from url
$uid = $_GET['uid'];

//deleting the row from table
$sql = "DELETE FROM rayanadb.tusers WHERE uid=:uid";
$query = $conn->prepare($sql);
$query->execute(array(':uid' => $uid));

//redirecting to the display page (index.php in our case)
header("Location:profile.php");
?>
