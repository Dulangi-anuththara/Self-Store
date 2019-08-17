
    <div class="col-md-6">
    <div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Reservations</h5>
        <ul class="list-group list-group-flush">
        <?php 
            $c=1;
            
                foreach ($result as $row) {
                    echo "<a href='handleCustomerNotifications/$row->ID' class='list-group-item' id='$row->ID'>Reservation $c</a>";
                    
                    $c=$c+1;
                } 


            
            
        ?>
        </ul>
    </div>
</div>
</div>



