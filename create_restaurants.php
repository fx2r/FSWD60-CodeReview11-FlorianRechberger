<?php
require_once 'actions/a_sessionstart.php';
$img_urlError="";
$nameError="";
$cuisineError="";
$short_descriptionError="";
$telError="";
$websiteError="";
$streetError="";
$postal_codeError="";
$cityError="";	
?>

<div class="col-md-6 col-lg-4 mb-4">	
	<div class="card h-100">
		<form action="actions/a_create_restaurants.php" method="POST" class="h-100 d-flex flex-column">
			<div class="card-body card-img-top bg-light d-flex align-items-center" style="height:5em;">
	        	<input type="text" class="form-control" name="img_url" id="img_url" placeholder="Enter image location here"/>
	            <span class="text-danger text-center"><?php echo $img_urlError; ?></span>
	        </div>
			<div class="card-body">
				<!-- <label for="name" class="card-title">Name</label> -->
	                <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="40" />
	                <span class="text-danger"><?php echo $nameError; ?></span>
				<!-- <label for="Cuisine">Type</label> -->
	                <input type="text" class="form-control my-3" name="cuisine" id="cuisine" placeholder="Type" maxlength="40" />
	                <span class="text-danger"><?php echo $cuisineError; ?></span>
				<!-- <label for="short_description">Short Description</label> -->
	                <textarea type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" rows="5" maxlength="300"></textarea>
	                <span class="text-danger"><?php echo $short_descriptionError; ?></span>
			</div>
			<div class="card-footer d-flex flex-column">
			<!-- <label for="tel">Telephone number</label> -->
                <input type="text" class="form-control text-muted mb-2" name="tel" id="tel" placeholder="+43 1234 5678" maxlength="40" />
                <span class="text-danger"><?php echo $telError; ?></span>
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
				<input type="hidden" name="restaurant_id" value="<?php echo $row['restaurant_id']?>">
				<button type="submit" name="create" class="btn btn-info mt-3">Add</button>
			</div>
		</form>
	</div>
</div>