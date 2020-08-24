
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
		$ISBN=filter_input(INPUT_POST,'ISBN');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

		$sql= "SELECT *  FROM book  WHERE ISBN=$ISBN";
		$result=$conn->query($sql);

		$row=mysqli_fetch_assoc($result);
			

	$conn->close();
	?>
	<form action="editBook_change.php" method="post">
	  <p> Title:
			<input type="text" placeholder=<?php echo $row['title']?> name="title"/>
		</p>
		<p> Year of Publising:
            <input type="number" placeholder=<?php echo $row['pubYear']?> name="pubYear"/>
	  </p>
		<p> Number of pages:
		  
            <input type="number" placeholder=<?php echo $row['numPages']?> name="numPages"/>
	  </p>
		<p> Publisher:
			<input type="text" placeholder=<?php echo $row['pubName']?> name="pubName"/>
		</p>
		
	<input type="hidden" value=<?php echo $ISBN ?> name="ISBN"   />
		<input type="submit" value="edit" name="edit"/>
	</form>

	 
</body>
</html>