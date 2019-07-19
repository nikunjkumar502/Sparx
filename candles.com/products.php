<div class="col-md-9">
<div class="row">
	<div class="col-md-9">
		<h2>ALL PRODUCTS</h2>
	</div>
	<div class="col-md-3">
		<select class="form-control" onchange="fetchAllProducts(this.value)" width="" id="fitercat">
			<option value="" selected="">ALL</option>
			<option value="candel" >CANDLES</option>
			<option value="diya" >DIYAS</option>
			<option value="light">LIGHTS</option>
		</select>
	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="productTable" class="table"></table>
		</div>
		
	</div>
</div>