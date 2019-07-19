<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shop</title>
	<?php include_once('style.php');?>
</head>
<body>
	<div class="container">
		<h1><center>SHOP</center></h1>
		<div class="row">
			<div class="col-md-12">
					<?php include_once('menu.php');?><br>
					<div class="row">
					<div class="col-md-3">
						<ul class="list-group">
					<button type="button" class="list-group-item list-group-item-action active bg-success">
					    Choose Products
					</button>
				  <li class="list-group-item d-flex justify-content-between align-items-center" onclick="fetchShopProducts('candel');">
				    Candels
				    <span class="badge badge-primary badge-pill" id="cbadge">1</span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center" onclick="fetchShopProducts('diya');">
				    Diyas
				    <span class="badge badge-primary badge-pill" id="dbadge">1</span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center" onclick="fetchShopProducts('light');">
				    Lights
				    <span class="badge badge-primary badge-pill" id="lbadge">1</span>
				  </li>
				</ul>
					</div>
				<div class="col-md-9"> 
				<h2>Products</h2>
				<hr>
				<div class="row" id="allproducts">	
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
			<?php include_once('script.php'); ?>
	<script type="text/javascript">
		fetchShopProducts("");
	</script>
</body>
</html>