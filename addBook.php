
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTUA librare database system</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Add Book</h1>
	<a href="employee_main.php">Return Home</a>


	<form action="addBook_change.php" method="post">
			<p><input type="number" placeholder="ISBN" name="ISBN"   /></p>
	  <p> 
			<input type="text" placeholder="Title" name="title"/>
		</p>
		<p> 
            <input type="number" placeholder="Year of Publising" name="pubYear"/>
	  </p>
		<p> 
		  
            <input type="number" placeholder="Number of pages" name="numPages"/>
	  </p>
		<p> 
			<input type="text" placeholder="Publisher" name="pubName"/>
		</p>
		
<input type="submit"  name="create" value="create"   /></p>
	
	</form>

	 
</body>
</html>