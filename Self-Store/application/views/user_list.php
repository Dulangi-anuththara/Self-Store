

<div class="container">
	<h1 class="page-header text-center">Customer Details</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url('index.php/Users/addnew') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Contact Number</th>
						<th>Email</th>
						<th>Address</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->ID; ?></td>
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->contact_number; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->address; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/Users/edit/<?php echo $user->ID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
							<td><a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->ID; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

