<?php

	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="libntua";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

echo $empID=filter_input(INPUT_POST,'empID');
echo $nr=filter_input(INPUT_POST,'conNr');
$sql1= "INSERT INTO `temporary_emp` (`empID`, `ContractNr`) VALUES ($empID, $nr)";
$result1=$conn->query($sql1);
if($result1) header('Location: EmployeeApp.php');
?>