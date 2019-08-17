

<div class="container">
	<h1 class="page-header text-center">Edits Customer Details</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/users" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $ID; ?>">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
				</div>
				<div class="form-group">
					<label>Contact Number:</label>
					<input type="text" class="form-control" value="<?php echo $contact_number; ?>" name="contact_number">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" value="<?php echo $address; ?>" name="address">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
