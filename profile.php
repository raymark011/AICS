<?php
session_start();
include_once("myconfig.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Students</title>
</head>
<body>
<div class="overlay-content">
    <div class="overlay-header">
            <div class="overlay-logo" style="color:black">
                <h4>ASIAN INSTITUTE OF COMPUTER STUDIES</h4>
            </div>
            <nav class="overlay-nav nav-item">
                <a href="home.php" class="nav-link" id="about" style="color:black">Home</a>
            </nav>
            <nav class="overlay-nav nav-item">
                <a href="about.php" class="nav-link" id="about" style="color:black">About</a>
            </nav>
            <nav class="overlay-nav nav-item">
                <a href="profile.php" class="nav-link" id="profile" style="color:black">Students|Info</a>
            </nav>
            <nav class="overlay-nav nav-item">
                <a href="semester.php" class="nav-link" id="profile" style="color:black">Semester</a>
            </nav>
            <nav class="overlay-nav nav-item">
                <a href="schedule.php" class="nav-link" id="schedule" style="color:black">More Info</a>
            </nav>
            <nav class="overlay-nav nav-item">
                <a href="logout.php" class="nav-link" id="logout" style="color:black">Log out</a>
            </nav>
        </div>
        
        <div class="container">
            <div class="container-content">
                <div class="container-header">
                    <h1>Students who sign up</h1>
                </div>
                <div class="container-division">
                    <div class="division">
                    <?php
                        //including the database connection file
                        include_once("myconfig.php");

                        //fetching data in descending order (lastest entry first)
                        $result = $conn->query("SELECT * FROM rayanadb.tusers ORDER BY uid DESC");
                        ?>

                        <table width='100%' border=0>

                        <tr bgcolor='#CCCCCC'>
                            <td>FirstName</td>
                            <td>Lastname</td>
                            <td>Gender</td>
                            <td>Age</td>
                            <td>ContactNumber</td>
                            <td>Update</td>
                        </tr>
                        <?php 	
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
                            echo "<tr>";
                            echo "<td>".$row['firstname']."</td>";
                            echo "<td>".$row['lastname']."</td>";
                            echo "<td>".$row['gender']."</td>";
                            echo "<td>".$row['age']."</td>";
                            echo "<td>".$row['contactnumber']."</td>";
                            echo "<td><a style=\"color:black\" href=\"edit.php?uid=$row[uid]\">Edit</a> | <a style=\"color:black\" href=\"delete.php?uid=$row[uid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>