

<div class="container">
	<h1 class="page-header text-center">Add new customer</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
           
			<h3>Add Customer
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/reservation/handleCustomerNotifications" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php 

                if(isset($reserve_data)){
                    foreach($reserve_data->result() as $row){

            ?>  
			<form method="POST" action="<?php echo base_url();?>index.php/reservation/handleCustomerNotifications">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $row->name; ?>" name="name">
				</div>
				<div class="form-group">
					<label>Contact Number:</label>
					<input type="text" class="form-control" value="<?php echo $row->phone_number; ?>" name="contact_number">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $row->email; ?>" name="email">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" value="<?php echo $row->address; ?>" name="address">
				</div>

				<div class="form-group">
					
					<input type="hidden" class="form-control" value="<?php echo $user_id ?>" name="user_id">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Insert</button>
            </form>
            <?php

                    }
                }
            ?>

		</div>
	</div>
</div>
