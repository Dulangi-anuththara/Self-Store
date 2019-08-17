
<div class="container">
	<h1 class="page-header text-center">Add Customers Details</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label>Contact Number:</label>
					<input type="text" class="form-control" name="contact_number">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="address">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
