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
    <link rel="stylesheet" href="css/style3.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Register</title>
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
        <div class="container2" style="height: 100vh">
            <div class="register-wrapper">
                <center>
                    <h1>Register as Student</h1>
                </center>
                <br><br>
                <div class="row justify-content-center">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="susername" class="form-control" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="spassword" class="form-control" placeholder="Enter password" required>
                        </div>
                        <hr>
                        <div class="form-group">
                        <label for="" style="padding-left: 10px">Gender: </label>
                            <select name="gender" id="gender">
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" class="form-control" placeholder="Enter Firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" placeholder="Enter Lastname" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="" style="padding-left: 10px">Role: </label>
                            <select name="role" id="role">
                                <option value="">Student</option>
                                <option value="">Teacher</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Number" required>
                        </div>
                        <div class="form-group">
                        
                        </div>
                        <hr>
                        <input type="submit" class="btn" value="Register">
                </form>
            </div>
        </div>
</body>
</html>