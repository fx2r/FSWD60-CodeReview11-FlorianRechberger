<?php
require_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<!----------meta, stylesheets---------->
	<?php include_once 'head-part.php'?>
</head>
<body>
	<!----------action----------->
<?php
$img_urlError="";
$nameError="";
$typeError="";
$short_descriptionError="";
$websiteError="";
$streetError="";
$postal_codeError="";
$cityError="";

$error = false;

if(isset($_POST['create'])) {

	$img_url= $_POST['img_url'];
	$name= $_POST['name'];
	$type= $_POST['type'];
	$short_description= $_POST['short_description'];
	$website= $_POST['website'];
	$street= $_POST['street'];
	$postal_code= $_POST['postal_code'];
	$city= $_POST['city']; 

	if(empty($img_url)){
		$error = true;
		$img_urlError = "...or no one will look at it";
	}
	if(empty($name)){
		$error = true;
		$nameError = "Tell us what it is";
	}
	if(empty($type)){
		$error = true;
		$typeError = "Please put what category it fits in";
	}
	if(empty($short_description)){
		$error = true;
		$short_descriptionError = "...and don\'t forget to be honest";
	}
	if(empty($website)){
		$error = true;
		$websiteError = "first website, then visit";
	}
	if(empty($street)){
		$error = true;
		$streetError = "If there there is none, be creative";
	}
	if(empty($postal_code)){
		$error = true;
		$postal_codeError = "Where should you go?";
	}
	if(empty($city)){
		$error = true;
		$cityError = "Please enter a city";
	}

	if (!$error) {
		$query = "INSERT INTO things_to_do (img_url, name, type, short_description, website, street, postal_code, city)
		VALUES ('$img_url', '$name', '$type', '$short_description', '$website', '$street', '$postal_code', '$city');"; 
		
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been created!';
				$_SESSION['msg_type'] = 'success';
		    } else {
		        echo "Error: " . mysqli_error($conn);
		    }
		    // header('location: settings.php');
		}
		
	}
?>
	<!-- <?php// require_once 'actions/a_create.php'?> ok, well, that scares me - it took me one hour to realise that I forgot the .php ending -->
	<!----------action message----------->
	<?php include_once 'message.php'?>
	<!----------header---------->
	<?php include_once 'nav.php';?>
	<!----------main---------->
	<main class="container pt-4">
		<div class="row justify-content-center">
			<div class="d-flex col-sm-6 col-lg-4 mb-4">
				<form action="settings.php" method="POST" >
					<div class="card d-flex">
			            <input type="text" class="form-control card-img-top bg-light text-center" name="img_url" id="img_url" placeholder="Enter image location here" style="height: 5em;word-break:break-word;>" />
			                <span class="text-danger text-center"><?php echo $img_urlError; ?></span>
						<div class="card-body mb-auto">
							<!-- <label for="name" class="card-title">Name</label> -->
				                <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="40" />
				                <span class="text-danger"><?php echo $nameError; ?></span>
							<!-- <label for="type">Type</label> -->
				                <input type="text" class="form-control" name="type" id="type" placeholder="Type" maxlength="40" />
				                <span class="text-danger"><?php echo $typeError; ?></span>
							<!-- <label for="short_description">Short Description</label> -->
				                <input type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" maxlength="40" />
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
