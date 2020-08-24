
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Search For A Book</h1>
	<a href="employee_main.php">Return Home</a>
	
	<form action="searchBook.php" method="post">
		<input type="text" name="mem">
	  <button type="submit">Search</button>
</form>
	<p></p>
	<table width="963">
		<tr>
		<th width="171" scope="col">Title</th>
			<th width="233" scope="col">Publisher</th>
		<th width="248" scope="col">ISBN</th>
			<th width="195" scope="col">Year of publishing</th>
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
			$result=$conn->query("SELECT * FROM book WHERE ISBN like '%$search%' or title like '%$search%' or pubName like '%$search%'  ");
			$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				
				echo "<tr><td>". $row['title'] ."</td><td>". $row['pubName'] . "</td><td>" .$row['ISBN'] ."</td><td>" .$row['pubYear'] ."</td><td><form action='deleteBook.php' method='post'><button>delete</button><input type='hidden' name='ISBN' value=".$row['ISBN']." ></form></td><td><form action='alterBook.php' method='post'><button>alter</button><input type='hidden' name='ISBN' value= ".$row['ISBN']. "></form></td></tr>";
			}

		} 
	else echo "No Book Found";

		}

}
else{
	echo "No Book Found";
	die();
}
$conn->close();
?>
		</table>
</body>
</html>