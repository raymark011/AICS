<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
include_once ('config.php');
if(isset($_POST['login'])){
   $susername = $_POST['username'];
   $spassword = $_POST['password'];
   $sql = "select * from rayanadb.tusers where username = :user && password = :pass";
   $query = $conn -> prepare($sql);
   $query -> bindParam(':user', $susername);
   $query -> bindParam(':pass', $spassword);
   $query -> execute();
   while($row = $query->fetch(PDO::FETCH_ASSOC)){
       $nickname = $row['nickname'];
   }
    $result = $query->rowCount();
    if($result > 0){
        $_SESSION['user'] = "ok";
        $_SESSION['nickname'] = $nickname;
        header("location:index.php");
    }
    else
    {
        echo "Error: Wrong Username or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton|Bowlby+One+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="header-wrapper">
        <div class="logo">
        <img src="img/aics-logo.png" alt="aics logo" class="mx-auto d-block" style="margin-top: 15px; margin-bottom: 10px">
        </div>
        <div class="text">
            <h6>Asian Institute of Computer Studies</h6>
        </div>
        <div class="navigation">
            <div class="nav-items">
            <a class="nav-link" href="logout.php" style="color: black; padding-top: -5px"><h6>PROFILE</h6></a>
            </div>
            <div class="nav-items">
            <a class="nav-link" href="logout.php" style="color: black; padding-top: -5px"><h6>SCHEDULE</h6></a>
            </div>
            <div class="nav-items">
            <a class="nav-link" href="logout.php" style="color: black; padding-top: -5px"><h6>EVENTS</h6></a>
            </div>
            <div class="nav-items">
            <a class="nav-link" href="logout.php" style="color: black; padding-top: -5px"><h6>SUBJECTS</h6></a>
            </div>
            <div class="nav-items">
                <a class="nav-link" href="logout.php" style="color: black; padding-top: -5px"><h6>LOGOUT</h6></a>
            </div>
            </div>
        </div>
    </div>


    <div class="content-wrapper">
        <div class="content-header">
            <div class="content-title">
                <h1>Welcome</h1>
            </div>
        </div>
        <div class="content-thumbnails">
            <div class="thumbnails">
                ads
            </div>
            <div class="thumbnails">
                ads
            </div>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</body>
</html>