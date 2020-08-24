
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Find your book on our shelf</h1>
	<p></p><a href="list_of_books.php">Return to the List</a></p>
	<table width="963">
		<tr>
		<th width="248" scope="col">Title</th>
			<th width="328" scope="col">Copy Number</th>
		<th width="144" scope="col">Place</th>

		</tr>
	<?php 
		$ISBN=filter_input(INPUT_POST,'ISBN');
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	
		$sql= "select available.ISBN, available.copyNr, available.shelf, book.title from (select distinct copies.ISBN, copies.copyNr,copies.shelf from copies left join borrows on copies.ISBN=borrows.ISBN and copies.copyNr=borrows.copyNr where (date_of_return is not null) or (data_of_borrowing is null)) as available, book where book.ISBN=available.ISBN and book.ISBN=$ISBN  ORDER BY `available`.`copyNr` ASC";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>". $row['title'] . "</td><td>". $row['copyNr'] . "</td><td>" .$row['shelf'] ."</td></tr>";
			}

		} 
	else echo "No copies available";
	$conn->close();

	?>
		</table>
	 
</body>
</html>