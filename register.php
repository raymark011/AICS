<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("myconfig.php");
if(isset($_POST['register'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
    $emailaddress = $_POST['emailaddress'];
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
	$contactnumber = $_POST['contactnumber'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($emailaddress) || empty($firstname) || empty($lastname) || empty($gender) || empty($age) || empty($contactnumber)) {
				
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($emailaddress)) {
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
        if(empty($age)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($contactnumber)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
            
		//insert data to database		
		$sql = "INSERT INTO rayanadb.tusers(username, password, emailaddress, firstname, lastname, gender, age, contactnumber) VALUES(:username, :password, :emailaddress, :firstname, :lastname, :gender, :age, :contactnumber)";
		$query = $conn->prepare($sql);	
		$query->bindparam(':username', $username);
		$query->bindparam(':password', $password);
        $query->bindparam(':emailaddress', $emailaddress);
        $query->bindparam(':firstname', $firstname);
		$query->bindparam(':lastname', $lastname);
        $query->bindparam(':gender', $gender);
		$query->bindparam(':age', $age);
		$query->bindparam(':contactnumber', $contactnumber);
        $query->execute();
        
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>