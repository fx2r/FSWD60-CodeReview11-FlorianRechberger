<?php
require_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<!----------meta, stylesheets---------->
	<?php include_once 'head_part.php'?>
</head>
<body>
	<!----------action----------->
	<?php include_once 'actions/a_create_things_to_do.php'?>
	<!----------action message----------->
	<?php include_once 'message.php'?>
	<!----------header---------->
	<?php include_once 'nav.php';?>
	<!----------main---------->
	<main class="container pt-4">
		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-7 col-lg-5 col-xl-4 mb-4">
				<form action="settings.php" method="POST" >
					<div class="card">
						<div class="card-body card-img-top bg-light d-flex justify-content-center align-items-center" style="height:5em;">
			            	<input type="text" class="form-control" name="img_url" id="img_url" placeholder="Enter image location here"/>
			                <span class="text-danger text-center"><?php echo $img_urlError; ?></span>
			            </div>
						<div class="card-body mb-auto">
							<!-- <label for="name" class="card-title">Name</label> -->
				                <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="40" />
				                <span class="text-danger"><?php echo $nameError; ?></span>
							<!-- <label for="type">Type</label> -->
				                <input type="text" class="form-control" name="type" id="type" placeholder="Type" maxlength="40" />
				                <span class="text-danger"><?php echo $typeError; ?></span>
							<!-- <label for="short_description">Short Description</label> -->
				                <textarea type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" rows="5" maxlength="300"></textarea>
				                <span class="text-danger"><?php echo $short_descriptionError; ?></span>
						</div>
						<div class="card-footer">
							<!-- <label for="website">Website</label> -->
				                <input type="text" class="form-control text-muted" name="website" id="website" placeholder="Website" maxlength="40" />
				                <span class="text-danger"><?php echo $websiteError; ?></span>
							<br>
							<!-- <label for="street">Street</label> -->
				                <input type="text" class="form-control text-muted" name="street" id="street" placeholder="Street name and number" maxlength="40" />
				                <span class="text-danger"><?php echo $streetError; ?></span>
				            <!-- <label for="postal_code">Postal Code</label> -->
				                <input type="text" class="form-control text-muted" name="postal_code" id="postal_code" placeholder="Postal Code" maxlength="40" />
				                <span class="text-danger"><?php echo $postal_codeError; ?></span>
				            <!-- <label for="city">City</label> -->
				                <input type="text" class="form-control text-muted" name="city" id="city" placeholder="City" maxlength="40" />
				                <span class="text-danger"><?php echo $cityError; ?></span>
							<br>
							<div class="mt-2">
								<input type="hidden" name="to_do_id" value="<?php echo $row['to_do_id']?>">
								<button type="submit" name="create" class="btn btn-info">Add</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
	<!----------footer---------->
	<?php require_once 'footer.php';?>
	<!----------scripts---------->
	<?php include_once 'scripts.php'?>
</body>
</html>
