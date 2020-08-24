
	<?php 
		$ID=filter_input(INPUT_POST,'empID');
	$MFirst=filter_input(INPUT_POST,'EFirst');
	$MLast=filter_input(INPUT_POST,'ELast');
	$salary=filter_input(INPUT_POST,'salary');

			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		
	
		if($EFirst!=""){
			$sql= "UPDATE employee  SET EFirst='$EFirst'  WHERE empID=$ID";
		$result=$conn->query($sql);

		}
		if($ELast!=""){
			$sql= "UPDATE employee  SET ELast='$ELast'  WHERE empID=$ID";
		$result=$conn->query($sql);

		}
		if($salary!=""){
			$sql= "UPDATE employee  SET salary='$salary'  WHERE empID=$ID";
		$result=$conn->query($sql);


		}


header('Location: employeeApp.php');
	
	
	

			

	$conn->close();
	?>
	 
