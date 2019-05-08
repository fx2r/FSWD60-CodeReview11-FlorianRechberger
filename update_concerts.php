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
		<?php require_once 'actions/a_update_concerts.php';?>
		<!----------action message----------->
		<?php include_once 'message.php';?>
		<!----------header---------->
		<?php require_once 'nav.php';?>
		<!----------main---------->
		<main class="container pt-4">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-7 col-lg-5 col-xl-4 mb-4">
					<form action="actions/a_update_concerts.php" method="POST" >
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
							<!-- <label for="event_date">Event Date</label> -->
				                <input type="date" class="form-control my-3" name="event_date" id="event_date" value="<?php if (isset($_SESSION['event_date'])) {echo $_SESSION['event_date']; unset($_SESSION['event_date']);}else{echo $event_date;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['event_dateError'])) {echo $_SESSION['event_dateError']; unset($_SESSION['event_dateError']);} ?>
				                </span>
							<!-- <label for="event_time">Event Time</label> -->
				                <input type="time" class="form-control mb-3" name="event_time" id="event_time" value="<?php if (isset($_SESSION['event_time'])) {echo $_SESSION['event_time']; unset($_SESSION['event_time']);}else{echo $event_time;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['event_timeError'])) {echo $_SESSION['event_timeError']; unset($_SESSION['event_timeError']);} ?>
				                </span>
				            <!-- <label for="ticket_price">Ticket Price</label> -->
				                <input type="number" class="form-control" name="ticket_price" id="ticket_price" placeholder="€" maxlength="40" value="<?php if (isset($_SESSION['ticket_price'])) {echo $_SESSION['ticket_price']; unset($_SESSION['ticket_price']);}else{echo $ticket_price;}?>" />
				                <span class="text-danger">
				                	<?php if (isset($_SESSION['ticket_priceError'])) {echo $_SESSION['ticket_priceError']; unset($_SESSION['ticket_priceError']);} ?>
				                </span>
							</div>
							<div class="card-footer">
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
								<input type="hidden" name="concert_id" value="<?php echo $concert_id?>">
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