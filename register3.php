<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("myconfig.php");
session_start();
if(isset($_POST['register3'])) {

    $studentname = $_POST['studentname'];
    $fathersname = $_POST['fathersname'];
	$fathersage = $_POST['fathersage'];
    $fathersnumber = $_POST['fathersnumber'];
    $mothersname = $_POST['mothersname'];
	$mothersage = $_POST['mothersage'];
	$mothersnumber = $_POST['mothersnumber'];
	$guardiansname = $_POST['guardiansname'];
    $guardiansage = $_POST['guardiansage'];
    $guardiansnumber = $_POST['guardiansnumber'];
		
	// checking empty fields
	if(empty($studentname) || empty($fathersname) || empty($fathersage) || empty($fathersnumber) || empty($mothersname) || empty($mothersage) || empty($mothersnumber) || empty($guardiansname) || empty($guardiansage) || empty($guardiansnumber)) {
		
		if(empty($studentname)) {
			echo "<font color='red'>Student Name field is empty.</font><br/>";
        }

        if(empty($fathersname)) {
			echo "<font color='red'>Father's Name field is empty.</font><br/>";
		}
		
		if(empty($fathersage)) {
			echo "<font color='red'>Father's Age field is empty.</font><br/>";
		}
		
		if(empty($fathersnumber)) {
			echo "<font color='red'>Father's Number field is empty.</font><br/>";
        }
        if(empty($mothersname)) {
			echo "<font color='red'>Mother's Name field is empty.</font><br/>";
		}
		
		if(empty($mothersage)) {
			echo "<font color='red'>Mother's Age field is empty.</font><br/>";
		}
		if(empty($mothersnumber)) {
			echo "<font color='red'>Mother's Number field is empty.</font><br/>";
		}
		
		if(empty($guardiansname)) {
			echo "<font color='red'>Guardian's Name field is empty.</font><br/>";
		}
		
		if(empty($guardiansage)) {
			echo "<font color='red'>Guardian's Age field is empty.</font><br/>";
        }

        if(empty($guardiansnumber)) {
			echo "<font color='red'>Guardian's Number field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
            
		//insert data to database		
		$sql = "INSERT INTO rayanadb.tstudentparents(studentname, fathersname, fathersage, fathersnumber, mothersname, mothersage,mothersnumber, guardiansname, guardiansage, guardiansnumber) VALUES(:studentname, :fathersname, :fathersage, :fathersnumber, :mothersname, :mothersage, :guardiansname, :guardiansage, :guardiansnumber)";
		$query=$conn->prepare($sql);
		
		$query->bindParam(':studentname', $studentname);
        $query->bindParam(':fathersname', $fathersname);
        $query->bindParam(':fathersage', $fathersage);
		$query->bindParam(':fathersnumber', $fathersnumber);
        $query->bindParam(':mothersname', $mothersname);
		$query->bindParam(':mothersage', $mothersage);
		$query->bindParam(':mothersnumber', $mothersnumber);
		$query->bindParam(':guardiansname', $guardiansname);
		$query->bindParam(':guardiansage', $guardiansage);
		$query->bindParam(':guardiansnumber', $guardiansnumber);
        $query->execute();
        
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='login.html'>Login</a>";
	}
}
?>
</body>
</html>