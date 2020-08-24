
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Create a new employee</h1>
	<a href="employee_main.php">Return Home</a>
<p>
<form action="createEmployee.php" method="post">
	  <p> Name:
			<input type="text" placeholder="First Name" name="EFirst"/>
		  
            <input type="text" placeholder="Last Name" name="ELast"/>
	  </p>
		<p> Salary:
			<input name="salary" type="number" />
	  </p>
		<p> Birtday:
			<input name="birthday" type="date" />
	  </p>
	<p> Password:
			<input name="password" type="text" placeholder="password" />
	  </p>
	<p>Contruct:
		<input type=radio name="con" value="permanent"> Permanent
		<input type=radio name="con" value="temporary"> Temporary
		
	</p>
		<input type="submit" value="New" name="submit"/>
	</form>


	
</p>
	 
</body>
</html>