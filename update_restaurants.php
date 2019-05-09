<?php require_once 'actions/a_sessionstart.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update</title>
		<!----------meta, stylesheets---------->
		<?php require_once 'head_part.php';?>
	</head>
	<body>
		<!----------update action----------->
		<?php require_once 'actions/a_update_restaurants.php';?>
		<!----------action message----------->
		<?php include_once 'message.php';?>
		<!----------header---------->
		<?php require_once 'nav.php';?>
		<!----------main---------->
		<main class="container pt-4">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-7 col-lg-5 col-xl-4 mb-4">
					<form action="actions/a_update_restaurants.php" method="POST" >
			     		<div class="card">
			     			<img class="card-img-top cover" src="<?php echo $img_url?>" alt="Card image cap">
							<div class="bg-light d-flex justify-content-center align-items-center p-url-form-custom">
								<?php #if unvalid input, it throws an error, and the corresponding session is set in order not to loose the entered input, so that it is possible to edit it accordingly thereafter. The set session is immediately unset after unsuccessful attempt to submit the form; this does not appear to be compulsory, however, I included it to not have an unneccessary session running ?>
				            	<input type="text" class="form-control" name="img_url" id="img_url" value="<?php if (isset($_SESSION['img_url'])) {echo $_SESSION['img_url']; unset($_SESSION['img_url']);}else{echo $img_url;}?>" placeholder="Enter new image location here" />
				                <?php if (isset($_SESSION['img_urlError'])) { ?>
				                <span class="text-danger text-center">
				                	<?php echo $_SESSION['img_urlError']; unset($_SESSION['img_urlError']); ?>
				                </span>
				            	<?php } ?>
				            </div>
							<div class="card-body mb-auto">
							<!-- <label for="name" class="card-title">Name</label> -->
				                <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="60" value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['name']; unset($_SESSION['name']);}else{echo $name;}?>" />
				                <?php if (isset($_SESSION['nameError'])): ?>
				                <span class="text-danger">
				                	<?php echo $_SESSION['nameError']; unset($_SESSION['nameError']); ?>
				                </span>
				            	<?php endif ?>
							<!-- <label for="cuisine">Cuisine</label> -->
				                <input type="text" class="form-control" name="cuisine" id="cuisine" placeholder="Type" maxlength="40" value="<?php if (isset($_SESSION['cuisine'])) {echo $_SESSION['cuisine']; unset($_SESSION['cuisine']);}else{echo $cuisine;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['cuisineError'])) {echo $_SESSION['cuisineError']; unset($_SESSION['cuisineError']);} ?>
				                </span>
							<!-- <label for="short_description">Short Description</label> -->
				                <textarea type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" rows="5" maxlength="300"><?php if (isset($_SESSION['short_description'])) {echo $_SESSION['short_description']; unset($_SESSION['short_description']);}else{echo $short_description;}?></textarea>
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['short_descriptionError'])) {echo $_SESSION['short_descriptionError']; unset($_SESSION['short_descriptionError']);} ?>
				                </span>
							</div>
							<div class="card-footer">
							<!-- <label for="tel">Telefone</label> -->
				                <input type="text" class="form-control text-muted" name="tel" id="tel" placeholder="+43 1234 5678" maxlength="200" value="<?php if (isset($_SESSION['tel'])) {echo $_SESSION['tel']; unset($_SESSION['tel']);}else{echo $tel;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['telError'])) {echo $_SESSION['telError']; unset($_SESSION['telError']);} ?>
				                </span>
								<br>
							<!-- <label for="website">Website</label> -->
				                <input type="text" class="form-control text-muted" name="website" id="website" placeholder="Website" maxlength="200" value="<?php if (isset($_SESSION['website'])) {echo $_SESSION['website']; unset($_SESSION['website']);}else{echo $website;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['websiteError'])) {echo $_SESSION['websiteError']; unset($_SESSION['websiteError']);} ?>
				                </span>
								<br>
							<!-- <label for="street">Street</label> -->
				                <input type="text" class="form-control text-muted" name="street" id="street" placeholder="Street name and number" maxlength="60" value="<?php if (isset($_SESSION['street'])) {echo $_SESSION['street']; unset($_SESSION['street']);}else{echo $street;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['streetError'])) {echo $_SESSION['streetError']; unset($_SESSION['streetError']);} ?>
				                </span>
				            <!-- <label for="postal_code">Postal Code</label> -->
				                <input type="text" class="form-control text-muted" name="postal_code" id="postal_code" placeholder="Postal Code" maxlength="40" value="<?php if (isset($_SESSION['postal_code'])) {echo $_SESSION['postal_code']; unset($_SESSION['postal_code']);}else{echo $postal_code;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['postal_codeError'])) {echo $_SESSION['postal_codeError']; unset($_SESSION['postal_codeError']);} ?>
				                </span>
				            <!-- <label for="city">City</label> -->
				                <input type="text" class="form-control text-muted" name="city" id="city" placeholder="City" maxlength="60" value="<?php if (isset($_SESSION['city'])) {echo $_SESSION['city']; unset($_SESSION['city']);}else{echo $city;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['cityError'])) {echo $_SESSION['cityError']; unset($_SESSION['cityError']);} ?>
				                </span>
								<br>
								<div class="mt-2">
								<input type="hidden" name="restaurant_id" value="<?php echo $restaurant_id?>">
									<button type="submit" name="update" class="btn btn-info">Update</button>
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
		<?php require_once 'scripts.php';?>
	</body>
</html>