
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Create a new member</h1>
	<a href="employee_main.html"><img src="css/house.png"  height="70"  /></a>
<?php
	$MFirst=filter_input(INPUT_POST,'MFirst');
	$MLast=filter_input(INPUT_POST,'MLast');
	$adStreet=filter_input(INPUT_POST,'adStreet');
	$adPostalCode=filter_input(INPUT_POST,'adPostalCode');
	$adNumber=filter_input(INPUT_POST,'adNumber');
	$Mbirthday=filter_input(INPUT_POST,'birthday');
	$password=filter_input(INPUT_POST,'password');
	

	$sepparator='-';
	$parts = explode($sepparator, $Mbirthday);
	$ID_f=$parts[2]*1000000000 + $parts[1]*10000000+ $parts[0]*1000;

	
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="libntua";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	
	$sql= "select count(*) as c from member where Mbirthday='$Mbirthday'";
	$result=$conn->query($sql);
	$num_rows=mysqli_num_rows($result);
	if($num_rows>0)	$row=mysqli_fetch_assoc($result);
	$ID=$ID_f+$row['c']+1;

	$sql1= "INSERT INTO `member` (`memberID`, `MFirst`, `MLast`, `adStreet`, `adNumber`, `adPostalCode`, `Mbirthday`, `memberPassword`) VALUES ($ID, '$MFirst', '$MLast', '$adStreet', $adNumber, $adPostalCode,'$Mbirthday', '$password')";
	$result1=$conn->query($sql1);
	if($result1) echo "<p>New member's username is $ID, Welcome</p>";
	else echo "please fill all the forms";
			

	


?>
	
	</body>
</html>