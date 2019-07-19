<?php 
	if(isset($_POST["submit"])){

		include_once("connection.php");
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		if(mysqli_num_rows(mysqli_query($con,"select *from `users` where email = '$email'")))
		{
			echo "2";
			exit(0);
		}

		$query = "insert into `users`(SrNo.,email,password,password2,status) values('$email','$password','$password2',1)";

		$res = mysqli_query($con,$query);

		if(mysqli_affected_rows($con)){	
			echo "1";
		}
		else{	
			echo "0";
		}

	}
	else 
		echo "<h1>Bad Request</h1>";
?>