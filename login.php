<?php 
//check if there is an existing session if there is,
//it will redirect to index.php
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}
//getting database and server info

require "config.php";
//checking if the submit button is clicked
//if it's clicked it will retrieve the
//values from the textbox
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from rayanadb.tusers where username = :user and password = :pass ";
    $query = $conn->prepare($sql);
    $query -> bindparam(':user', $username);
    $query -> bindparam(':pass', $password);
    $query -> execute();
    //counting the results from the sql string query
    $count = $query->rowCount();
    if($count > 0) {
        //getting the id from the query
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $id = $row['uid'];
        $nickname = $row['nickname'];
    }
    session_start();
    //setting the session value using the id
    $_SESSION['user'] = $uid;  
    $_SESSION['nickname'] = $nickname;
    echo "Accepted ID: " . $uid;
    header("location:index.php");
    }
    else{
        echo "error";
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Anton|Bowlby+One+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <title>STUDENT LOGIN</title>
    </head>
    <body>
        <div class="header-wrapper">
            <div class="flex">
                <div class="text">
                    <h1>Asian Institute of Computer Studies</h1>
                </div>
                <div class="logo">
                    <img src="img/aics-logo.png" alt="aics logo" class="img-center">
                </div>
            </div>
            <center>
            <h4>Login as:</h4>
            </center>
            <div class="row" style="margin:5px; text-align:center">
            <button id="bstudent" class="btn2 col-sm-6">Students</button>
            <button id="bfaculty" class="btn2 col-sm-6">Faculty</button>
            </div>
        <div class="container" id="student">
                <div class="login-content">
                    <form action="home.php">
                        <img src="img/student.svg">
                        <h2 style="color: rgb(32, 32, 32)">student</h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-user"></i>
                              </div>
                              <div class="div">
                                      <h5>Username</h5>
                                      <input type="text" class="input" name="susername" required>
                              </div>
                           </div>
                           <div class="input-div pass">
                              <div class="i"> 
                                   <i class="fas fa-lock"></i>
                              </div>
                              <div class="div">
                                   <h5>Password</h5>
                                   <input type="password" class="input" name="spassword" required>
                           </div>
                        </div>
                        <a href="register.php" class="a">Create an Account?</a>
                        <input type="submit" class="btn" value="Login">
                    </form>
                </div>
                
                <div class="img">
                        <img src="img/student-background.svg">
                    </div>
            </div>



            <div class="container" id="faculty">
                <div class="login-content">
                    <form action="home2.php" method="POST">
                        <img src="img/teacher.svg">
                        <h2 style="color: rgb(32, 32, 32)">Faculty</h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-user"></i>
                              </div>
                              <div class="div">
                                      <h5>Username</h5>
                                      <input type="text" class="input" name="tusername" required>
                              </div>
                           </div>
                           <div class="input-div pass">
                              <div class="i"> 
                                   <i class="fas fa-lock"></i>
                              </div>
                              <div class="div">
                                   <h5>Password</h5>
                                   <input type="password" class="input" name="tpassword" required>
                           </div>
                        </div>
                        <a href="#" class="a">Create an Account?</a>
                        <input type="submit" class="btn" value="Login">
                    </form>
                </div>
                
                <div class="img">
                        <img src="img/teacher-background.svg">
                    </div>
            </div>
        <script src="script/script.js"></script>
    </body>
</html>

 