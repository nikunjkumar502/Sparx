<div class="col-md-9">
	<div class="row">
		<div class="col-md-6">
													
		<?php  
			if (isset($_GET["m"]))
			 {
					if ($_GET["m"]=="1") {
						?>
						<div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Success!</strong> You have successfully saved the product.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>

			<?php	
			}			
			else{
			?>
			<div class=" col-md-12 alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Error!</strong> Your product is not saved due to some error.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>	
					<?php
				}
			}
			?>							
			<h4>ADD PRODUCTS</h4>
			<form action="productprocess.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label>Product Picture</label>
				  <input type="file" class="form-control" name="ppicture" accept="image/*" id="ppicture">
				</div>
				<div class="form-group">
				  <label>Product Title</label>
				  <input type="text" class="form-control" name="ptitle" id="ptitle" placeholder="Product Title">
				</div>
				<div class="form-group">
				  <label>Product Price</label>
				  <input type="text" class="form-control" name="pprice" id="pprice" placeholder="Price">
				</div>
				<div class="form-group">
				  <label>Select Category</label>
				  <select  class="form-control" id="pcategory" name="pcategory">
				  	<option value="Default">Default</option>
				  	<option value="candel">Candel</option>
				  	<option value="diya">Diya</option>
				  	<option value="light">Light</option>
				  </select>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="pdescription" id="pdescription" placeholder="Write something here..."></textarea>
				</div>
		  		<div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" name="ppublish" type="checkbox" id="ppublish">
			      <label class="form-check-label" for="gridCheck">
			        Publish It?
			      </label>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="pshow" name="pshow">
			      <label class="form-check-label" for="gridCheck">
			        Show it on website
			      </label>
			    </div>
			  </div>
			  
			  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
			   <button type="reset" class="btn btn-danger" >reset</button>
			</form>
		</div>
		<div class="col-md-6">
			<h3>
				Preview
			</h3>
			<hr>
			<img id="productImg" height="200" width="200" alt="">
			
		</div>
	</div>
</div>