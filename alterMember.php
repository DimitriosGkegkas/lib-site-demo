
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Edit Member</h1>
	<a href="employee_main.php">Return Home</a>

	<?php 
		$ID=filter_input(INPUT_POST,'memberID');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

		$sql= "SELECT *  FROM member  WHERE memberID=$ID";
		$result=$conn->query($sql);

		$row=mysqli_fetch_assoc($result);
			

	$conn->close();
	?>
	<form action="alterMember_change.php" method="post">
	  <p> Name:
			<input type="text" placeholder=<?php echo $row['MFirst']?> name="MFirst"/>
		  
            <input type="text" placeholder=<?php echo $row['MLast']?> name="MLast"/>
	  </p>
		<p> Address:
			<input name="adStreet" type="text" placeholder=<?php echo $row['adStreet']?> />
		  
            <input type="number" placeholder=<?php echo $row['adNumber']?> name="adNumber"/>
			<input type="number" placeholder=<?php echo $row['adPostalCode']?> name="adPostalCode"/>
	  </p>
		
	<input type="hidden" value=<?php echo $ID ?> name="memberID"   />
		<input type="submit" value="edit" name="submit"/>
	</form>

	 
</body>
</html>