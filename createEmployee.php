
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Create a new Employee</h1>
	<a href="employee_main.php">Return Home</a>
<?php
	$EFirst=filter_input(INPUT_POST,'EFirst');
	$ELast=filter_input(INPUT_POST,'ELast');
	$con_p=filter_input(INPUT_POST,'con');
	$salary=filter_input(INPUT_POST,'salary');
	$Ebirthday=filter_input(INPUT_POST,'birthday');
	$password=filter_input(INPUT_POST,'password');
	

	$sepparator='-';
	$parts = explode($sepparator, $Ebirthday);
	$ID_f=$parts[2]*1000000000 + $parts[1]*10000000+ $parts[0]*1000;

	
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="libntua";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	$ID_F_like=$ID_f/1000;
	
	$sql= "select count(*) as c from employee where empID like '$ID_F_like%'";
	$result=$conn->query($sql);
	$num_rows=mysqli_num_rows($result);
	if($num_rows>0)	$row=mysqli_fetch_assoc($result);
	$ID=$ID_f+$row['c']+1;

	$sql1= "INSERT INTO `employee` (`empID`, `EFirst`, `ELast`, `salary`,  `empPassword`) VALUES ($ID, '$EFirst', '$ELast','$salary', '$password')";
	$result1=$conn->query($sql1);
	if($result1) echo "<p>New employee's username is $ID, Welcome</p>";
	else echo "please fill all the forms";
	
	if($con_p=="permanent") {echo "<h3>hi</h3><form action='emp_per.php' method='post'><input type='hidden' value='$ID' name='empID'> Hiring Date: <input type='date' name='HiringDate'><p><input type='submit' value='edit' name='submit'/></p></form>";}
	else {echo "<form action='emp_tem.php' method='post' ><input type='hidden' value='$ID' name='empID'> Contruct Number: <input type='number' name='conNr'><p><input type='submit' name='Submit' value='submit'></p></form>";}
			

	


?>

	
	</body>
</html>