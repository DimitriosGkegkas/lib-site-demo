

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
	<h1>Members Of Our Library</h1>
	<h2> Hi there 
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
	<a href="employee_main.php">Return Home</a>
	<p>
		<li> <a href="search_for_member.html">Search For a Member</a></li>
		<li> <a href="newMember.php">New Member Form</a></li>
		<li> <a href="blackList.php">Black List</a></li>
		
	</p>


	 
</body>
</html>



