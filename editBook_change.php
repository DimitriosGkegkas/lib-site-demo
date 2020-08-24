
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
		
	
		if($title!=""){
			$sql= "UPDATE book SET title='$title'  WHERE ISBN=$ISBN";
		$result=$conn->query($sql);

		}
		if($pubYear!=""){
			$sql= "UPDATE book SET pubYear='$pubYear'  WHERE ISBN=$ISBN";
		$result=$conn->query($sql);

		}
		if($numPages!=""){
			$sql= "UPDATE book SET title='$numPages'  WHERE ISBN=$ISBN";
		$result=$conn->query($sql);

		}
	if($pubName!=""){
		
		$sql="SELECT * from publisher where pubName like '%$pubName%'";
		$result=$conn->query($sql);
		$num_rows=mysqli_num_rows($result);
		echo $num_rows;
		if($num_rows>0){
			$row=mysqli_fetch_assoc($result);
			$pubName=$row['pubName'];
			$sql= "UPDATE book SET pubName='$pubName'  WHERE ISBN=$ISBN";
			$result=$conn->query($sql);
			header('Location: books_employee.php');
		}
		else{
			header('Location: newPublisher.php');
		}
	}




	
	
	

			

	$conn->close();
	?>
	 
