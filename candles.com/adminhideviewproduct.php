<?php
if (isset($_GET["pid"])) {
	include_once("connection.php");
	$pid = $_GET["pid"];
	$flag = $_GET["flag"];
	$query = "update `products`  set pshow=$flag where pid=$pid";
	$res = mysqli_query($con,$query);
	if(mysqli_affected_rows($con)){
		echo "1";
	}
	else{
		echo "0";
	}
}
else{
	echo "<h1>BAD REQUEST</h1>";
}
?>
