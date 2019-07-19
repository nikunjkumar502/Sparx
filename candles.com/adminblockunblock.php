 <?php 

if(isset($_GET["uid"])){
	include_once("connection.php");
	$pid = $_GET["uid"];
	$flag = $_GET["flag"];
	$query = "update `users` set status=$flag where uid=$pid";
	$res = mysqli_query($con,$query);
	if(mysqli_affected_rows($con)){		
		echo "1";
	}else {
		echo "0";
	}
}
else{
	echo "<h1>Bad Request</h1>";
}
?> 