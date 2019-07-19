<?php
		if(isset($_POST["submit"])){
			include_once("connection.php");
			$ptitle=$_POST["ptitle"];
			$pprice=$_POST["pprice"];
			$pcategory=$_POST["pcategory"];
			$pdescription=$_POST["pdescription"];

			$ppicture=$_FILES["ppicture"]["name"];
			$ext = pathinfo($ppicture,PATHINFO_EXTENSION);
			$destination="upload/".time().date("aghiswzlj").".".$ext;
			move_uploaded_file($_FILES["ppicture"]["tmp_name"] , $destination );

			$ppublish=0;
			if (isset($_POST["ppublish"])) 
				$ppublish=1;
			
			$pshow=0;
			if(isset($_POST["pshow"]))
			$pshow=1;
		 		$query = "insert into `products` (ptitle,pprice,pcategory,pdescription,ppicture,ppublish,pshow) values('$ptitle','$pprice','$pcategory','$pdescription','$destination',$ppublish,$pshow) ";

		 	$res=mysqli_query($con,$query);

		 if (mysqli_affected_rows($con)) {
		 	header("location:adminpanel.php?m=1");
		 }
		 else{
		 	header("location:adminpanel.php?m=0");
		 }


		 }else echo "<h1>Bad Request</h1>";
?>