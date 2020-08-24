

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
	<h1>NTUA Library   <a href="home.html"><img src="css/exit.png"  /></a></h1>
	<h2> Welcome 
<?php
		session_start();
		$user= $_SESSION['user'];

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		$result=$conn->query("select EFirst, ELast from employee where empID=$user");
		$row= mysqli_fetch_assoc($result);
		
		echo $row['EFirst'];
		echo " ";
		echo $row['ELast'];
		
?>
		</h2>

	<p>
		<a href="membersApp.php"><img src="css/members_employee.jpg"  width="240"  /></a>
		<a href="employeeApp.php"><img src="css/employee_employee.jpg"   width="240"  /></a>
		<a href="bookApp.php"><img src="css/books.jpg"   width="240"   /></a>
		<a href="notifications_first.php"><img src="css/not.jpg"  width="240" /></a>
		
	</p>

	 
</body>
</html>



