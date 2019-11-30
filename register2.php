<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("myconfig.php");
session_start();
if(isset($_POST['register2'])) {	
	$semester = $_POST['semester'];
	$year = $_POST['year'];
	// checking empty fields
	if(empty($semester) || empty($year)) {

		if(empty($semester)) {
			echo "<font color='red'>Semester field is empty.</font><br/>";
		}
		
		if(empty($year)) {
			echo "<font color='red'>Year field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
            
		//insert data to database		
		$sql = "INSERT INTO rayanadb.tenrollment(semester, year) VALUES(:semester, :year)";
        $query = $conn->prepare($sql);	
		$query->bindParam(':semester', $semester);
		$query->bindParam(':year', $year);
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='register3.html'>Continue</a>";
	}
}
?>
</body>
</html>