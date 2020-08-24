
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
	$copyNr=filter_input(INPUT_POST,'copyNr');
	$memberID=filter_input(INPUT_POST,'memberID');


			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		
		$sql= "INSERT INTO `borrows` ( `memberID`, `ISBN`, `copyNr`, `data_of_borrowing`) VALUES ( $memberID, $ISBN, $copyNr,  NOW())";
		$result=$conn->query($sql);
	if($result)
		echo "Thank you for borrowing from us";
		else {
			echo "There was a problem";
		}
	
	
	?>
<h1>Add Book</h1>
	<a href="employee_main.php">Return Home</a>


	<form action="borrow_change.php" method="post">
			<p><input type="number" placeholder="ISBN" name="ISBN"   /></p>
<p> 
            <input type="number" placeholder="Copy Number" name="copyNr"/>
	  </p>
		<p> 
			<input type="number" placeholder="memberID" name="memberID"/>
		</p>
	
<input type="submit"  name="create" value="check"   /></p>
	
	</form>

	 
</body>
</html>