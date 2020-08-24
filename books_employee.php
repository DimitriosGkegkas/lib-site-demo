
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>List of books</h1>
	<a href="employee_main.php"><img src="css/house.png"  height="70"  /></a>
	<table width="963">
		<tr>
		<th width="226" scope="col">Title</th>
			<th width="203" scope="col">Publisher</th>
		<th width="141" scope="col">Number of Pages</th>
			<th width="198" scope="col">ISBN</th>
			<th width="134">Number of Copies</th>
			<th width="28"></th>
			<th width="28"></th>
		</tr>
	<?php 
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	
		$sql= "SELECT b.pubName,b.numPages, b.title,c.ISBN, count(*) as copiesNum FROM copies as c, book as b where c.ISBN=b.ISBN group by c.ISBN";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				$ISBN=$row['ISBN'] ;
				echo "<tr><td>". $row['title'] . "</td><td>". $row['pubName'] . "</td><td>" .$row['numPages'] ."</td><td>" .$row['ISBN'] ."</td> <td>" .$row['copiesNum'] ."</td><td><form action='editBook.php' method='post'><button>edit</button><input type='hidden' name='ISBN' value='$ISBN'/></form></td><td><form action='deleteBook.php' method='post'><button>delete</button><input type='hidden' name='ISBN' value='$ISBN'/></form></td></tr>";
			}

		} 
	else echo "No Books are listed";
	$conn->close();

	?>
		</table>
	<a href="addBook.php">Add New Book</a>
	 
</body>
</html>