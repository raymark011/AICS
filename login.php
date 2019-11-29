<?php 
session_start();
if(isset($_SESSION['user'])){
    header("location:home.php");
}
include_once ('myconfig.php');
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
        header("location:home.php");
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
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN</title>
</head>
<body>
    <header> ASIAN INSTITUTE OF COMPUTER STUDIES</header>
    <div class="container">
        <div class="control-wrapper">
            <div class="control-header">
                Sign In
            </div>
            <form action="login.php" method="POST">
                <label for="">Username</label><br>
                <input type="text" name="username" class="form-control"><br>
                <label for="">Password</label><br>
                <input type="password" name="password" class="form-control"><br>
                <a href="register.html" class="nav-link">Create an account?</a>
                <input type="submit" name="login" value="Login" class="btn btn-primary" style="width:100%">
            </form>
        </div>
    </div>
</body>
</html>