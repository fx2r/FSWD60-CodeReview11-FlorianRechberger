<?php

require_once 'a_sessionstart.php';
//predefine the variables needed in our form when the update page is opend from another link to avoid an error
	$img_url = "";
	$name = "";
	$cuisine = "";
	$short_description = "";
	$tel = "";
	$website = "";
	$street = "";
	$postal_code = "";
	$city = "";
	$restaurant_id = "";
//polluting fields with values stored in our database
if(isset($_GET['update'])){
	$id = $_GET['update'];
	$sql = "SELECT * FROM restaurants WHERE restaurant_id=$id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
		$img_url = $row['img_url'];
		$name = $row['name'];
		$cuisine = $row['cuisine'];
		$short_description = $row['short_description'];
		$tel = $row['tel'];
		$website = $row['website'];
		$street = $row['street'];
		$postal_code = $row['postal_code'];
		$city = $row['city'];
		$restaurant_id = $row['restaurant_id'];
}
//override fields with new inputs when the form is submitted
if(isset($_POST['update'])) {
	$id = $_POST['restaurant_id'];
	$img_url = $_POST['img_url'];
	$name = $_POST['name'];
	$cuisine = $_POST['cuisine'];
	$short_description = $_POST['short_description'];
	$tel = $_POST['tel'];
	$website = $_POST['website'];
	$street = $_POST['street'];
	$postal_code = $_POST['postal_code'];
	$city = $_POST['city'];

	$error = false; //by default we assume that the input will be correct, ergo $error=false, however, we solely trust our validation:
	if(empty($img_url)){
		$error = true;
		$_SESSION['img_urlError'] = 'Or it won\'t attract a worm'; //each error message is stored in a seesion to be retrieved at a later state
	}
	if(empty($name)){
		$error = true;
		$_SESSION['nameError'] = 'Fatboy Slim\'s Slash Dot Dash Dot wouldn\'t be enough - rather be a Foo Fighter';
	}
	if(empty($cuisine)){
		$error = true;
		$_SESSION['cuisineError'] = 'Make it at least worth a typo';
	}
	if(empty($short_description)){
		$error = true;
		$_SESSION['short_descriptionError'] = 'Add a simle description; consider the following: The purpose of descriptive writing is to make our readers see, feel, and hear what we have seen, felt, and heard. Whether we\'re describing a person, a place, or a thing, our aim is to reveal a subject through vivid and carefully selected details. ...just keep it simple, you know.';
	}
	if(empty($tel)){
		$error = true;
		$_SESSION['telError'] = 'Tell a phone, I need you';
	}
	if(empty($website)){
		$error = true;
		$_SESSION['websiteError'] = 'If you don\'t specify, it will rather lead to a tangled web site';
	}
	if(empty($street)){
		$error = true;
		$_SESSION['streetError'] = 'Whatever drives you, PoEms, though not streets, will inspire you.';
	}
	if(empty($postal_code)){
		$error = true;
		$_SESSION['postal_codeError'] = 'A person\'s postal code shouldn\'t decide their destiny';
	}
	if(empty($city)){
		$error = true;
		$_SESSION['cityError'] = 'I get you - "I would rather be amongst forest animals and the sounds of nature, than amongst city traffic and the noise of man"';
	}
	//if there's no error the entry will be updated into the database
	if (!$error) {
		$query = "UPDATE restaurants SET
		img_url = '$img_url',
		name = '$name',
		cuisine = '$cuisine',
		short_description = '$short_description',
		tel = '$tel',
		website = '$website',
		street = '$street',
		postal_code = '$postal_code',
		city = '$city'
		WHERE restaurant_id = $id"; 
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been updated!';
				$_SESSION['msg_type'] = 'success';
				header('location: ../restaurants.php'); //redirects back to the events' page 
				
	    } else {
	        echo 'Error while updating record: ' . mysqli_error($conn); //if sth wrong with the db connection
	    }
	//if input doesn't pass validation:
	} elseif($error) {
		//storing inputs in sessinos, so they don't get lost when redirecting back to update page
		$_SESSION['img_url'] = $img_url;
		$_SESSION['name'] = $name;
		$_SESSION['cuisine'] = $cuisine;
		$_SESSION['short_description'] = $short_description;
		$_SESSION['tel'] = $tel;
		$_SESSION['website'] = $website;
		$_SESSION['street'] = $street;
		$_SESSION['postal_code'] = $postal_code;
		$_SESSION['city'] = $city;
		header('location: ../update_restaurants.php?update='.$id.''); //redirecting to update and id to 'stay on the same page'
	}
}
$conn->close();
ob_end_flush();
