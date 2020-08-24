
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Create a new member</h1>
	<a href="employee_main.php">Return Home</a>
<p>
<form action="createMember.php" method="post">
	  <p> Name:
			<input type="text" placeholder="First Name" name="MFirst"/>
		  
            <input type="text" placeholder="Last Name" name="MLast"/>
	  </p>
		<p> Address:
			<input name="adStreet" type="text" placeholder="Street" />
		  
            <input type="number" placeholder="Number" name="adNumber"/>
			<input type="number" placeholder="Postal Code" name="adPostalCode"/>
	  </p>
		<p> Birtday:
			<input name="birthday" type="date" />
	  </p>
	<p> Password:
			<input name="password" type="text" placeholder="password" />
		  
         
	  </p>
	
		<input type="submit" value="New" name="submit"/>
	</form>


	
</p>
	 
</body>
</html>