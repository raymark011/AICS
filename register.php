<?php 
include_once ("config.php");
if(isset($_POST['register'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
    $role = $_POST['role'];
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
	$contactnumber = $_POST['contactnumber'];
	$emailaddress = $_POST['emailaddress'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($role) || empty($firstname) || empty($lastname) || empty($gender) || empty($contactnumber) || empty($emailaddress)) {
				
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($role)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($firstname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lastname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($gender)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($contactnumber)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($emailaddress)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO rayanadb.tusers(username, password, role, firstname, lastname, emailaddress, contactnumber, gender) VALUES(:username, :password, :role, :firstname, :lastname, :emailaddress :contactnumber, :gender)";
		$query = $dbConn->prepare($sql);
		$query->bindparam(':username', $username);
		$query->bindparam(':password', $password);
        $query->bindparam(':role', $role);
        $query->bindparam(':firstname', $firstname);
		$query->bindparam(':lastname', $lastname);
        $query->bindparam(':emailaddress', $emailaddress);
        $query->bindparam(':contactnumber', $contactnumber);
		$query->bindparam(':gender', $gender);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
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
                    <h1>Registration Form</h1>
                </center>
                <br><br>
                <div class="row justify-content-center">
                    <form action="home.php" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <hr>
                        <div class="form-group">
                        <label for="" style="padding-left: 10px">Gender: </label>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="" style="padding-left: 10px">Role: </label>
                            <select name="role" id="role">
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" name="emailaddress" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" name="contactnumber" class="form-control" placeholder="Enter Contact Number" required>
                        </div>
                        <hr>
                        <input type="submit" class="btn" value="Register" name="register">
                </form>
            </div>
        </div>
</body>
</html>