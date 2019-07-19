<?php     

 
	if(isset($_GET["q"])){
		include_once("connection.php");

			$products=array();

			$query="select * from `products` where pshow=1 and ppublish=1";

			$res=mysqli_query($con,$query);

			if(mysqli_num_rows($res)) {
				
				while($single_row = mysqli_fetch_array($res))
				$products[]= $single_row;
			}
			echo json_encode($products);
						

	}else{
		echo "<h1>BAD REQUEST.....</h1>";
	}
?>