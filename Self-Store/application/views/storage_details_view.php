<!--<div class="col-lg-6">-->                
<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Current Reservations</h5>
                                    <table class='mb-0 table table-bordered'>
                                    <thead>
                                    <tr><th>ID </th>
                                    <th>Description </th><th>total_area</th><th>Cubic Foot</th><th>Price</th><th>Total</th><th>Occupied</th><th>Available</th><th>Delete</th><th>Edit</th></tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row):?>
                                        <tr><td><?= $row->ID?></td>
                                        <td><?= $row->description ?></td>
                                        <td><?= $row->total_area ?></td>
                                        <td><?= $row->cubic_feet?></td>
                                        <td><?= $row->price?></td>
                                        <td><?= $row->total?></td>
                                        <td><?= $row->occupied?></td>
                                        <td><?= $row->available?></td>
                                        <td><a href="<?= site_url('reservation/delete/')?> " onclick="return confirm('Are you sure that you want to delete this record?')" class="btnDel btn-wide btn-shadow btn btn-danger" role="button">Delete</a></td>
                                        <td><a href="<?= base_url();?>index.php/reservation/update_reservation/" class="btn-wide btn btn-success" id="">Edit</a></td></tr>
                                        
                                        <?php endforeach;?>
                                        </tbody>    
                                        </table>
                                           
                                       
                                    </div>
                                </div>


                               

                                