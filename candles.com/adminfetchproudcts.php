<?php 

if(isset($_GET["q"])){

	include_once("connection.php");
	
	$products = array();

	$query = "select * from `products`";

	$res = mysqli_query($con,$query);

	if(mysqli_num_rows($res)){
		
		while($single_row = mysqli_fetch_array($res)){
			$products[] = $single_row;
		}

		echo json_encode($products);

	}else {

	}


}
else{
	echo "<h1>Bad Request</h1>";
}



?>