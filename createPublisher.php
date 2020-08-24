
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Create a new Publisher</h1>
	
<?php
	$pubName=filter_input(INPUT_POST,'pubName');
	$estYear=filter_input(INPUT_POST,'estYear');
	$street=filter_input(INPUT_POST,'street');
	$number=filter_input(INPUT_POST,'number');
	$postalCode=filter_input(INPUT_POST,'postalCode');
	
	



	
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="libntua";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);



	$sql1= "INSERT INTO `publisher` (`pubName`, `estYear`, `adStreet`, `adNumber`,  `adPostalCode`) VALUES ('$pubName', '$estYear', '$street','$number', '$postalCode')";
	$result1=$conn->query($sql1);
	if($result1) echo "<p>New publisher is created, Welcome</p> <p> <a href='books_employee.php'>Go to Books</a> </p>";
	else echo "please fill all the forms <p> <a href='newPublisher.php'>retrue</a> </p>";
	


?>

	
	</body>
</html>