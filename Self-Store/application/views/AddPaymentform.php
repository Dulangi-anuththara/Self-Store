
<div class="container">
	<h1 class="page-header text-center">Add Payment Details</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/payment/insert">
				<div class="form-group">
					<label>Customer_ID:</label>
					<input type="text" class="form-control" name="Customer_ID">
				</div>
				<div class="form-group">
					<label>Storage_ID:</label>
					<input type="text" class="form-control" name="Storage_ID">
				</div>
				<div class="form-group">
					<label>Payment_Type:</label>
					<input type="text" class="form-control" name="Payment_Type">
				</div>
				<div class="form-group">
					<label>Unit_Price:</label>
					<input type="text" class="form-control" name="Unit_Price">
				</div>
				<div class="form-group">
					<label>Date:</label>
					<input type="Date" class="form-control" name="Date">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>

