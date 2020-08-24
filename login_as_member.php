<?php

$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){
	if(!empty($password)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="libntua";
		
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error()){
			header('Location: main.html');
			die('Connect error('. mysqli_connect_errno() .')' . mysli_connect_error());
			
		}
		else{
			$result=$conn->query("SELECT * FROM member WHERE memberID=$username and memberPassword=$password");
			$num_rows=mysqli_num_rows($result);
			if($num_rows>0) {
				session_start();
				$_SESSION['user']=$username;
				header('Location: member_main.php');
			}
			else{
				header('Location: member_main_tryagain.html');
			}

		}
	}
	else echo "Password should not be empty";
}
else{
	echo "Username should not be empty";
	die();
}
$conn->close();
?>
