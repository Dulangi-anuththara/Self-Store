
<div class="container">
	<h1 class="page-header text-center">Payment Details</h1>
	<div class="row">
		<div class="col-sm-12 col-sm-offset-1">
			<a href="<?php echo base_url('index.php/payment/addnew') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Receipt_ID</th>
						<th>Customer_ID</th>
						<th>Storage_ID</th>
						<th>Payment_Type</th>
						<th>Unit_Price</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->Receipt_ID; ?></td>
							<td><?php echo $user->Customer_ID; ?></td>
							<td><?php echo $user->Storage_ID; ?></td>
							<td><?php echo $user->Payment_Type; ?></td>
							<td><?php echo $user->Unit_Price; ?></td>
							<td><?php echo $user->Date; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/payment/edit/<?php echo $user->Receipt_ID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/payment/delete/<?php echo $user->Receipt_ID; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
