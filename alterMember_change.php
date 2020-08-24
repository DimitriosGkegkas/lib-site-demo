
	<?php 
		$ID=filter_input(INPUT_POST,'memberID');
	$MFirst=filter_input(INPUT_POST,'MFirst');
	$MLast=filter_input(INPUT_POST,'MLast');
	$adStreet=filter_input(INPUT_POST,'adStreet');
	$adPostalCode=filter_input(INPUT_POST,'adPostalCode');
	$adNumber=filter_input(INPUT_POST,'adNumber');

			$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		
	
		if($MFirst!=""){
			$sql= "UPDATE member  SET MFirst='$MFirst'  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
if($MLast!=""){
			$sql= "UPDATE member  SET MLast='$MLast'  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
if($MFirst!=""){
			$sql= "UPDATE member  SET MFirst='$MFirst'  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
if($adStreet!=""){
			$sql= "UPDATE member  SET adStreet='$adStreet'  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
if($adNumber!=""){
			$sql= "UPDATE member  SET adNumber=$adNumber  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
	if($adPostalCode!=""){
			$sql= "UPDATE member  SET adPostalCode=$adPostalCode  WHERE memberID=$ID";
		$result=$conn->query($sql);

		}
	
	
	

			

	$conn->close();
	?>
	 
