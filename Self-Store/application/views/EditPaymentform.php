

<div class="container">
	<h1 class="page-header text-center">Edits Payment Details</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/payment/update/<?php echo $Receipt_ID; ?>">
				<div class="form-group">
					<label>Customer_ID:</label>
					<input type="text" class="form-control" value="<?php echo $Customer_ID; ?>" name="Customer_ID">
				</div>
				<div class="form-group">
					<label>Storage_ID:</label>
					<input type="text" class="form-control" value="<?php echo $Storage_ID; ?>" name="Storage_ID">
				</div>
				<div class="form-group">
					<label>Payment_Type:</label>
					<input type="text" class="form-control" value="<?php echo $Payment_Type; ?>" name="Payment_Type">
				</div>
				<div class="form-group">
					<label>Unit_Price:</label>
					<input type="text" class="form-control" value="<?php echo $Unit_Price; ?>" name="Unit_Price">
				</div>
				<div class="form-group">
					<label>Date:</label>
					<input type="Date" class="form-control" value="<?php echo $Date; ?>" name="Date">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
