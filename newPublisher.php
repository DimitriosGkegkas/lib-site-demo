
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>You have to give some informations for the new publisher first and then true again</h1>
	<a href="employee_main.php">Return Home</a>
<p>
<form action="createPublisher.php" method="post">
	  <p>
			<input type="text" placeholder="Publisher name" name="pubName"/>
		  
           
	  </p>
		<p> 
			<input name="estYear" placeholder="Establish Year" type="number" />
	  </p>
		<p> Address:
			<input name="street" placeholder="Street Name" type="text" />
	
			<input name="number" type="number" placeholder="Number" />
			
			<input name="postalCode" type="number" placeholder="PostalCode" />
	  </p>
	
		

		<input type="submit" value="New" name="submit"/>
	</form>


	
</p>
	 
</body>
</html>