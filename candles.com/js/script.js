$(document).ready(function(){
	
	function readURL(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#productImg').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$("#ppicture").change(function() {
	  readURL(this);
	});

	$(".d-flex").click(function(){
		$(".d-flex").removeClass("active");
		$(this).addClass("active");
	});

		$("#subBtn").click(function(){
		$email = $("#semail").val();
		$pwd1 = $("#current-password").val();
		$email = $("#new-password").val();

		if (($pwd1.length> 4 && $pwd1.length>4) && ($pwd1==$pwd2) && $email.length>12) {

			$.ajax({
				url: "signupprocess.php",
				data:{
					"submit": "1",
					"email": $email,
					"password": $pwd1
				},
				method:"POST",
				success:function(result){
					if(result.trim()=="1")
			        	alert("successfully signed up!!\n Please login now");
			        if(result.trim()=="0")
			        	alert("Oops it's not you it's us!!\n Please Try again after sometime");
			        if(result.trim()=="2")
			        	alert("Email already exists!!\n Please login");
			    },
			    error:function(e){
			    	alert("Error");
				}
			});

		}else{
			alert("enter valid values");
		}


	});
});
function fetchShopProducts(category){
	
	$candle = 0;
	$diya = 0;
	$light = 0;	


	var url = "fetchproducts.php?q=";
		
	$.getJSON(url,function(products){
		$("#allproducts").empty();
		
		for(i=0;i<products.length;i++){
			if(products[i].pcategory=="candel")
			  $candle++;			
			if(products[i].pcategory=="light")
						  $light++;			
			if(products[i].pcategory=="diya")
						  $diya++;			


			if(category!=""){

				if(products[i].pcategory == category){
					$("#allproducts").append('<div class="col-md-4"><div class="card" style=""><div class="product-image" style=background-image:url("'+ products[i].ppicture +'") ></div><div class="card-body"><h5 class="card-title">'+ products[i].ptitle +'</h5><p class="card-text">Price: '+ products[i].pprice+'</p> <p class="card-text">Rating:</p><a href="#" class="btn btn-primary">View</a> &nbsp; <a href="#" class="btn btn-danger">checkout</a></div></div></div>');
				}
			}
			else{
					$("#allproducts").append('<div class="col-md-4"><div class="card" style=""><div class="product-image" style=background-image:url("'+ products[i].ppicture +'") ></div><div class="card-body"><h5 class="card-title">'+ products[i].ptitle +'</h5><p class="card-text">Price: '+ products[i].pprice+'</p> <p class="card-text">Rating:</p><a href="#" class="btn btn-primary">View</a> &nbsp; <a href="checkout.php" class="btn btn-danger">checkout</a></div></div></div>');
			}	
		}

		$("#cbadge").html($candle);
		$("#dbadge").html($diya);
		$("#lbadge").html($light);
	});

}


