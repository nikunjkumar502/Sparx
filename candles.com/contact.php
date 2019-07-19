<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<?php include_once('style.php'); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php include_once('menu.php'); ?>
		</div>
		<div class="row">
			<div class="col-md-12 jumbotron text-center">
				<h1>Contact</h1>
				<p class="jumbo-nav-link"> > Home / Contact</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27518.044942986922!2d77.59213309875828!3d30.443028980431833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f23004c62217f%3A0x3742d7187796a33c!2sPaonta+Sahib%2C+Himachal+Pradesh+173025!5e0!3m2!1sen!2sin!4v1542896464732" width="95%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
				<h4>flee free to ask</h4>	
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>First Name</label>
				      <input type="text" class="form-control" id="firstname" placeholder="First Name">
				    </div>
				    <div class="form-group col-md-6">
				      <label >Last Name</label>
				      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Ex: email@example.com">
				  </div>
				  <div class="form-group">
				    <label >Message/ Query</label>
				    <textarea class="form-control" id="message" placeholder="Write something here..."></textarea>
				  </div>
				  
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>	
	
	<?php include_once('script.php'); ?>
	
</body>
</html>