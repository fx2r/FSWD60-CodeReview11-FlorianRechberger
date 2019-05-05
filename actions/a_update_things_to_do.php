<?php

require_once 'a_sessionstart.php';
//predefine the variables needed in our form when the update page is opend from another link to avoid an error
	$img_url = "";
	$name = "";
	$type = "";
	$short_description = "";
	$website = "";
	$street = "";
	$postal_code = "";
	$city = "";
	$to_do_id = "";
//polluting fields with values stored in our database
if(isset($_GET['update'])){
	$id = $_GET['update'];
	$sql = "SELECT * FROM things_to_do WHERE to_do_id=$id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
		$img_url = $row['img_url'];
		$name = $row['name'];
		$type = $row['type'];
		$short_description = $row['short_description'];
		$website = $row['website'];
		$street = $row['street'];
		$postal_code = $row['postal_code'];
		$city = $row['city'];
		$to_do_id = $row['to_do_id'];
}
//override fields with new inputs when the form is submitted
if(isset($_POST['update'])) {
	$id = $_POST['to_do_id'];
	$img_url = $_POST['img_url'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$short_description = $_POST['short_description'];
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
	if(empty($type)){
		$error = true;
		$_SESSION['typeError'] = 'Make it at least worth a typo';
	}
	if(empty($short_description)){
		$error = true;
		$_SESSION['short_descriptionError'] = 'Add a simle description; consider the following: The purpose of descriptive writing is to make our readers see, feel, and hear what we have seen, felt, and heard. Whether we\'re describing a person, a place, or a thing, our aim is to reveal a subject through vivid and carefully selected details. ...just keep it simple, you know.';
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
		$query = "UPDATE things_to_do SET img_url = '$img_url', name = '$name', `type` = '$type', short_description = '$short_description', website = '$website', street = '$street', postal_code = '$postal_code', city = '$city' WHERE to_do_id = $id"; 
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been updated!';
				$_SESSION['msg_type'] = 'success';
				header('location: ../things_to_do.php'); //redirects back to the events' page 
				
	    } else {
	        echo 'Error while updating record: ' . mysqli_error($conn); //if sth wrong with the db connection
	    }
	//if input doesn't pass validation:
	} elseif($error) {
		//storing inputs in sessinos, so they don't get lost when redirecting back to update page
		$_SESSION['img_url'] = $img_url;
		$_SESSION['name'] = $name;
		$_SESSION['type'] = $type;
		$_SESSION['short_description'] = $short_description;
		$_SESSION['website'] = $website;
		$_SESSION['street'] = $street;
		$_SESSION['postal_code'] = $postal_code;
		$_SESSION['city'] = $city;
		header('location: ../update_things_to_do.php?update='.$id.''); //redirecting to update and id to 'stay on the same page'
	}
}
$conn->close();
ob_end_flush();
