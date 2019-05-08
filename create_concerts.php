<?php
require_once 'actions/a_sessionstart.php';
$img_urlError="";
$nameError="";
$event_dateError="";
$event_timeError="";
$ticket_priceError="";
$websiteError="";
$streetError="";
$postal_codeError="";
$cityError="";	
?>

<div class="col-md-6 col-lg-4 mb-4">	
	<div class="card h-100">
		<form action="actions/a_create_concerts.php" method="POST" class="h-100 d-flex flex-column">
			<div class="card-body card-img-top bg-light d-flex align-items-center" style="height:5em;">
	        	<input type="text" class="form-control" name="img_url" id="img_url" placeholder="Enter image location here"/>
	            <span class="text-danger text-center"><?php echo $img_urlError; ?></span>
	        </div>
			<div class="card-body">
				<!-- <label for="name" class="card-title">Name</label> -->
	                <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="40" />
	                <span class="text-danger"><?php echo $nameError; ?></span>
				<!-- <label for="event_date">Event Date</label> -->
	                <input type="date" class="form-control my-3" name="event_date" id="event_date" />
	                <span class="text-danger"><?php echo $event_dateError; ?></span>
				<!-- <label for="event_time">Event Time</label> -->
	                <input type="time" class="form-control mb-3" name="event_time" id="event_time" />
	                <span class="text-danger"><?php echo $event_timeError; ?></span>
	            <!-- <label for="ticket_price">Ticket Price</label> -->
	                <input type="number" class="form-control" name="ticket_price" id="ticket_price" placeholder="€" maxlength="40" />
	                <span class="text-danger"><?php echo $ticket_priceError; ?></span>
			</div>
			<div class="card-footer d-flex flex-column">
			<!-- <label for="website">Website</label> -->
                <input type="text" class="form-control text-muted mb-2" name="website" id="website" placeholder="Website" maxlength="40" />
                <span class="text-danger"><?php echo $websiteError; ?></span>
				<!-- <label for="street">Street</label> -->
                <input type="text" class="form-control text-muted" name="street" id="street" placeholder="Street name and number" maxlength="40" />
                <span class="text-danger"><?php echo $streetError; ?></span>
            <!-- <label for="postal_code">Postal Code</label> -->
                <input type="text" class="form-control text-muted" name="postal_code" id="postal_code" placeholder="Postal Code" maxlength="40" />
                <span class="text-danger"><?php echo $postal_codeError; ?></span>
            <!-- <label for="city">City</label> -->
                <input type="text" class="form-control text-muted" name="city" id="city" placeholder="City" maxlength="40" />
                <span class="text-danger"><?php echo $cityError; ?></span>
				<input type="hidden" name="to_do_id" value="<?php echo $row['to_do_id']?>">
				<button type="submit" name="create" class="btn btn-info mt-3">Add</button>
			</div>
		</form>
	</div>
</div>