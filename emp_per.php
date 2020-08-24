<?php

	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="libntua";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

echo $empID=filter_input(INPUT_POST,'empID');
echo $Date=filter_input(INPUT_POST,'HiringDate');
$sql1= "INSERT INTO `permanent_emp` (`empID`, `HiringDate`) VALUES ($empID, '$Date')";
$result1=$conn->query($sql1);
if($result1) header('Location: EmployeeApp.php');
?>