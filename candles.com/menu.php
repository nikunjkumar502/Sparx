
			
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="./">Spark</a>
				  
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="shop.php">Shop</a>
				      </li>
				      
				      <li class="nav-item">
				        <a class="nav-link" href="about.php">About</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="contact.php">Contact</a>
				      </li>
				      <!-- 
				      	<li class="nav-item">
				        	<a class="nav-link" href="#">Contact</a>
				     	</li> 
				  	   -->
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      
				      <a  class="btn btn-outline-secondary" href="loginpage.php">Login</a>&nbsp;
				      <a  class="btn btn-outline-primary" href="signuppage.php">Signup</a>

					<?php 
						
						if(isset($_SESSION["logged_in"])){
							?>
							&nbsp;
					      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php"> Log out</a>


							<?php 
						}
						else{

					?>

				      &nbsp;
				      <button class="btn btn-outline-info my-2 my-sm-0" type="button" value="cart"> Cart</button>

				  	<?php 
				  		} 

				  	?>
				    </form>
				  </div>
				</nav>
			</div>
	