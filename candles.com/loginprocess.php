<?php 
	session_start();
	if(isset($_GET["submit"])){
		
		include_once("connection.php");
		
		$email = $_GET["email"];
		$password = $_GET["password"];
		
		$query = "select * from `admin_auth` where email = '$email' and password='$password' ";

		$res = mysqli_query($con,$query);

		if(mysqli_num_rows($res)){
			$_SESSION["logged_in"] = true;
			$_SESSION["email"] = $email;
			header("location:adminpanel.php");
		}
		else{

			echo "Not a user ! try again";
		}
	}else echo "<h1>Bad Request</h1>";
?>