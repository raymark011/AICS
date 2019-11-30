<?php
// including the database connection file
include_once("myconfig.php");

if(isset($_POST['update2']))
{	
	$eid = $_POST['eid'];
	$year=$_POST['year'];
	$semester=$_POST['semester'];
	
	// checking empty fields
	if(empty($year) || empty($semester)) {	
			
		if(empty($year)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($semester)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$sql = "UPDATE rayanadb.tenrollment SET year=:year, semester=:lastname WHERE eid=:eid";
		$query = $conn->prepare($sql);
		$query->bindparam(':eid', $eid);
		$query->bindparam(':year', $year);
		$query->bindparam(':semester', $semester);
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
$eid = $_GET['eid'];

//selecting data associated with this particular id
$sql = "SELECT * FROM rayanadb.tenrollment WHERE eid=:eid";
$query = $conn->prepare($sql);
$query->execute(array(':eid' => $eid));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$eid = $row['eid'];
	$year = $row['year'];
	$semester = $row['semester'];
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
				<td>Year (2019-2020)</td>
				<td><input type="text" name="year" value="<?php echo $year;?>"></td>
			</tr>
			<tr> 
				<td>Semester</td>
				<td><input type="text" name="semester" value="<?php echo $semester;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="eid" value=<?php echo $_GET['eid'];?>></td>
				<td><input type="submit" name="update2" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
