
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Books that are currently borrowed</h1>
	<a href="employee_main.php">Return Home</a>
	<table width="963">
		<tr>
		<th width="263" scope="col">Title</th>
			<th width="236" scope="col">Copies Number</th>
		<th width="166" scope="col">Borrowed by</th>
			<th width="196" scope="col">Borrowed at</th>
			<th width="73"></th>
		</tr>
	<?php 
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		session_start();
		$user= $_SESSION['user'];

		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	
		$sql= "SELECT * FROM borrows INNER JOIN book ON book.ISBN=borrows.ISBN WHERE date_of_return is null";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				$ISBN=$row['ISBN'] ;
				$copyNr=$row['copyNr'] ;
				$memberID=$row['memberID'] ;
				$date_of_borrowing=$row['data_of_borrowing'] ;
				echo "<tr><td>". $row['title'] . "</td><td>". $row['copyNr'] . "</td><td>" .$row['memberID'] ."</td><td>" .$row['data_of_borrowing'] ."</td><td></tr>";
			}
			
		} 
		else echo "No memeber has borrowed a book";
		
		
		
	
	
	
	$conn->close();

	?>
		</table>
	<a href="notifications.php">Send Notifications</a>
	 
</body>
</html>