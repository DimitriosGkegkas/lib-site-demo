

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
	<h1>NTUA Library    <a href="home.html"><img src="css/exit.png"  /></a></h1>
	<h2> Welcome 
<?php
		session_start();
		$user= $_SESSION['user'];

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		$result=$conn->query("select MFirst, MLast from member where memberID=$user");
		$row= mysqli_fetch_assoc($result);
		
		echo $row['MFirst'];
		echo " ";
		echo $row['MLast'];
		
?>
</h2>
	<p>
		<li> <a href="list_of_books.php"><img src="css/list_of_Books.jpg"  height="552"  /></a></li>
		<li> <a href="history.php"><img src="css/history.jpg"  height="552"  /></a></li>
		
	

	 
</body>
</html>



