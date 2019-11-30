<?php
// including the database connection file
include_once("myconfig.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$contactnumber=$_POST['contactnumber'];
	
	// checking empty fields
	if(empty($firstname) || empty($lastname) || empty($gender) || empty($age) || empty($contactnumber)) {	
			
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
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($contactnumber)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$sql = "UPDATE rayanadb.tusers SET firstname=:firstname, lastname=:lastname, gender=:gender, age=:age, contactnumber=:contactnumber WHERE uid=:uid";
		$query = $conn->prepare($sql);
				
		$query->bindparam(':uid', $uid);
		$query->bindparam(':firstname', $firstname);
		$query->bindparam(':lastname', $lastname);
		$query->bindparam(':gender', $gender);
		$query->bindparam(':age', $age);
		$query->bindparam(':contactnumber', $contactnumber);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: profile.php");
	}
}
?>
<?php
//getting id from url
$uid = $_GET['uid'];

//selecting data associated with this particular id
$sql = "SELECT * FROM rayanadb.tusers WHERE uid=:uid";
$query = $conn->prepare($sql);
$query->execute(array(':uid' => $uid));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$uid = $row['uid'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$gender = $row['gender'];
	$age = $row['age'];
	$contactnumber = $row['contactnumber'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Contact Number</td>
				<td><input type="text" name="contactnumber" value="<?php echo $contactnumber;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
