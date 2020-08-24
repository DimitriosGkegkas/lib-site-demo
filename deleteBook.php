
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>



	<?php 
		$ISBN=filter_input(INPUT_POST,'ISBN');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

		$sql= "DELETE  FROM book  WHERE ISBN=$ISBN";
		if($conn->query($sql)) echo "<h1>Book Deleted</h1>";
			else echo "<h1>Book could not be deleted</h1>";
	$conn->close();

	?>

	 
		<a href="employee_main.php">Return Home</a>
</body>
</html>