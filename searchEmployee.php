
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Search For A Employee</h1>
	<a href="employee_main.php">Return Home</a>
	
	<form action="searchEmployee.php" method="post">
		<input type="text" name="mem">
	  <button type="submit">Search</button>
</form>
	<p></p>
	<table width="963">
		<tr>
		<th width="171" scope="col">Name</th>
			<th width="233" scope="col">employeeID</th>
		<th width="248" scope="col">Condruct</th>
		<th width="45" scope="col">delete</th>
			<th width="38" scope="col">alter</th>
		</tr>
	<?php

$search=filter_input(INPUT_POST,'mem');
if(!empty($search)){
	
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error()){
			header('Location: main.html');
			die('Connect error('. mysqli_connect_errno() .')' . mysli_connect_error());
			
		}
		else{
			$result=$conn->query("SELECT * FROM employeeforemployee1 WHERE empID like '%$search%' or EFirst like '%$search%' or ELast like '%$search%'  ");
			$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				
				echo "<tr><td>". $row['ELast'] ." ".$row['EFirst']. "</td><td>". $row['empID'] . "</td><td> Permanent </td><td><form action='deleteEmployee.php' method='post'><button>delete</button><input type='hidden' name='empID' value=".$row['empID']." ></form></td><td><form action='alterEmployee.php' method='post'><button>alter</button><input type='hidden' name='empID' value= ".$row['empID']. "></form></td>     </tr>";
			}

		} 
	else echo "No Employee Found";

		}

}
else{
	echo "No Employee Found";
	die();
}
$conn->close();
?>
		</table>
</body>
</html>