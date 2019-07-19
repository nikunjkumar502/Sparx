<div class="col-md-9">
	<div class="row">
		<div class="col-md-9">
			<h3>All Users</h3>
		</div>	
		<div class="col-md-3">
			<select class="form-control" onchange="fetchAllUsers(this.value)" width="" id="fitercat">
				<option value="" selected="">All</option>
				<option value="0" >Blocked</option>
				<option value="1">UnBlocked</option>
			</select>
		</div>
		<div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="productTable" class="table"></table>
		</div>
	</div>
		
</div>