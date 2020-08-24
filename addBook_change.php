
	<?php 
		$ISBN=filter_input(INPUT_POST,'ISBN');
	$title=filter_input(INPUT_POST,'title');
	$pubYear=filter_input(INPUT_POST,'pubYear');
	$numPages=filter_input(INPUT_POST,'numPages');
$pubName=filter_input(INPUT_POST,'pubName');

			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		
	
	
			
	
		
		$sql="SELECT * from publisher where pubName like '%$pubName%'";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		echo $num_rows;
		if($num_rows>0){
			$row=mysqli_fetch_assoc($result);
			$pubName=$row['pubName'];
			
			$sql= "INSERT INTO `book` (`ISBN`, `title`, `pubYear`, `numPages`, `pubName`) VALUES ('$ISBN', '$title', '$pubYear', '$numPages', '$pubName') ";
			$result=$conn->query($sql);
			if($result)
			header('Location: books_employee.php');
			else header('Location: addBook.php'); 
		}
		else{
			header('Location: newPublisher.php');
		}
	




	
	
	

			

	$conn->close();
	?>
	 
