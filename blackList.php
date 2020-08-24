<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
	<body>
		<h1>Black List</h1>
		
	<a href="employee_main.php"><img src="css/house.png"  height="70"  /></a>
	<table width="963">
		<tr>
		<th width="226" scope="col">memberID</th>
			<th width="203" scope="col">Find</th>
		</tr>
	<?php 
			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	
		$sql="select p.memberID 
from (
select memberID, timestampdiff(day,data_of_borrowing,date_of_return)
from borrows
where date_of_return is not null

UNION ALL

select memberID, timestampdiff(day,data_of_borrowing,CURRENT_TIMESTAMP)
from borrows
where date_of_return is null
    )as p
    
    group by p.memberID
    having count(*)>3";
			
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		if($num_rows>0){
			
			while($row=mysqli_fetch_assoc($result)){
				$memberID=$row['memberID'];
				echo "<tr><td>". $row['memberID'] . "</td><td><form action='searchMember.php' method='post'><button><img src='css/search.png'  /></button><input type='hidden' name='mem' value='$memberID'/></form></td></tr>";
			}

		} 
	else echo "No Books are listed";
	$conn->close();

	?>
		</table>


</body>
</html>