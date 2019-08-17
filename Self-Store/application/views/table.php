<!--<div class="col-lg-6">-->                
<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Current Reservations</h5>
                                    <table class='mb-0 table table-bordered'>
                                    <thead>
                                    <tr><th>Reservation ID </th>
                                    <th>Customer ID </th><th>Store Line </th><th>Store Unit</th><th>Date of reservtion</th><th>Items</th><th>Remarks</th><th>Delete</th><th>Update</th></tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row):?>
                                        <tr><td><?= $row->ReservationID?></td>
                                        <td><?= $row->CustomerID?></td>
                                        <td><?php echo($row->StorageLine) ?></td>
                                        <td><?= $row->StorageNumber?></td>
                                        <td><?= $row->DateOfOccupiedReserved?></td>
                                        <td><?= $row->ItemDescription?></td>
                                        <td><?= $row->Remarks?></td>
                                        <td><a href="<?= site_url('reservation/delete/' . $row->ReservationID)?>" onclick="return confirm('Are you sure that you want to delete this record?')" class="btnDel btn-wide btn-shadow btn btn-danger" role="button">Delete</a></td>
                                        <td><a href="<?= base_url();?>index.php/reservation/update_reservation/<?=$row->ReservationID ?>" class="btn-wide btn btn-success" id="<?= $row->ReservationID?>">Edit</a></td></tr>
                                        
                                        <?php endforeach;?>
                                        </tbody>    
                                        </table>
                                           
                                       
                                    </div>
                                </div>


                               

                                