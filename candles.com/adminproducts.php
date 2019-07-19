<?php
		session_start();
		if (!isset($_SESSION["logged_in"])) {
			header("location:index.php");	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin panel</title>
	<?php include_once('style.php');
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include_once('menu.php'); ?>
					</div>
					<br>
					<div class="container">
						<div class="row">
							<?php include_once('sidebar.php');
							?>
							<?php include_once('products.php');
							?>
						</div>
					</div>
				</div>
					</div>
				<?php include_once('script.php');	?>
	<script type="text/javascript" src="js/admin.js"></script>
	<script type="text/javascript">
		fetchAllProducts("");
	</script>
</body>
</html>