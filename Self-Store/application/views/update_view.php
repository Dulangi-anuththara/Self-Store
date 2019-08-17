<div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Reservation Form</h5>
                            <?php 

                                if(isset($reserve_data)){
                                    foreach($reserve_data->result() as $row){

                            ?> 
                            <form class="needs-validation" action="<?php echo base_url();?>index.php/reservation/update_reservation" method="post" novalidate>
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Reservation ID</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Customer ID" name="Id" value="<?php echo "$row->ReservationID";?>" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                                Please enter valid customer ID
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Customer ID</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Customer ID" name="custId" value="<?php echo "$row->CustomerID" ;?>" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                                Please enter valid customer ID
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleCustomSelect" class="">Storage Line</label>
                                        <select type="select" id="exampleCustomSelect" name="line" class="custom-select" required>
                                                                <option selected="selected" ><?php echo "$row->StorageLine" ;?></option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>D</option>
                                                                
                                                            </select>
                                                        
                                                <div class="invalid-feedback">
                                                Please provide storage line
                                            </div>          
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Unit Number</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Unit" name="unit" value="<?php echo "$row->StorageNumber" ;?>" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                                Please provide unit number
                                            </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="exampleText" class="">Item Description</label><textarea name="item" id="exampleText" class="form-control" value=""><?php echo "$row->ItemDescription" ;?></textarea>
                                    </div>
                                
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleCustomSelect" >Approximate start date of rental</label>
                                        <input type="date" class="form-control" name="date" value="<?php echo "$row->DateOfOccupiedReserved" ;?>" required>
                                        <div class="invalid-feedback">
                                                Please provide approximate date
                                            </div>       
                                    </div>
                                    
                                                    
                                                                 
                                    </div>                                   
                                        
                                    
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                        <label for="exampleText" class="">Remarks</label>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="remarks" value="Reserved" class="custom-control-input" 
                                        <?php   
                                        if($row->Remarks=="Reserved"){
                                            echo "checked";
                                        }
                                        
                                        ?>
                                        ><label class="custom-control-label" for="exampleCustomRadio">
                                        Reserved</label></div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="remarks" value="Occupied" class="custom-control-input" 
                                        <?php   
                                        if($row->Remarks=="Occupied"){
                                            echo "checked";
                                        }
                                        
                                        ?>
                                        ><label class="custom-control-label" for="exampleCustomRadio2">Occupied
                                        </label></div>

                                        <div class="invalid-feedback">
                                            Please provide unit number
                                        </div>
                                    </div>                  
                                    
                                </div>
                                
                                <input type="hidden" name="hidden_id" value="<?php echo "$row->ReservationID" ;?>"/>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>

                            <?php 
                            } 
                        }
                     ?>

                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
                        </div>
                    </div>