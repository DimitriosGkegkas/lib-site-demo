
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Edit Employee</h1>
	<a href="employee_main.php">Return Home</a>

	<?php 
		$empID=filter_input(INPUT_POST,'empID');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

		$sql= "SELECT *  FROM employee  WHERE empID=$empID";
		$result=$conn->query($sql);

		$row=mysqli_fetch_assoc($result);
			

	$conn->close();
	?>
	<form action="alterEmployee_change.php" method="post">
	  <p> Name:
			<input type="text" placeholder=<?php echo $row['EFirst']?> name="EFirst"/>
		  
            <input type="text" placeholder=<?php echo $row['ELast']?> name="ELast"/>
	  </p>
		<p> Salary:
		  
            <input type="number" placeholder=<?php echo $row['salary']?> name="salary"/>
	  </p>
		
	<input type="hidden" value=<?php echo $empID ?> name="empID"   />
		<input type="submit" value="edit" name="submit"/>
	</form>

	 
</body>
</html>