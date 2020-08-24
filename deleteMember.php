
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Member Deleted</h1>
	<a href="employee_main.php">Return Home</a>

	<?php 
		$ID=filter_input(INPUT_POST,'memberID');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	echo $ID;
		$sql= "DELETE  FROM member  WHERE memberID=$ID";
		$conn->query($sql);
	$conn->close();

	?>

	 
</body>
</html>