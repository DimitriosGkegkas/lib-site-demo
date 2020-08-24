
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>My Borrowing History</h1>
	<a href="member_main.php"><img src="css/house.png"  height="70"  /></a>
	<p></p>
	<table width="963">
		<tr>
		<th width="332" scope="col">Title</th>
			<th width="252" scope="col">Borrow Date</th>
		<th width="247" scope="col">Rutern Date</th>
			<th width="107" scope="col">Notifications</th>
		</tr>
	<?php 
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		session_start();
		$user= $_SESSION['user'];
		$sql= "SELECT * FROM borrows,book where memberID=$user and borrows.ISBN=book.ISBN";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				$ISBN=$row['ISBN'] ;
				$copyNr=$row['copyNr'] ;
				$date_of_borrowing=$row['data_of_borrowing'] ;
				$sql1="select count(*) as c  from reminder where memberID=$user and ISBN=$ISBN  and copyNr=$copyNr and date_of_borrowing='$date_of_borrowing'  ";
				$result_new=$conn->query($sql1);
			
				$row_new=mysqli_fetch_assoc($result_new);
				echo "<tr><td>".$row['title']."</td><td>". $row['data_of_borrowing'] . "</td><td>" .$row['date_of_return'] ."</td><td>".$row_new['c']."</td></tr>";
			}

		} 
	else echo "You have not yet borrowed any book";
	$conn->close();

	?>
		</table>
	 
</body>
</html>