<?php
require_once 'a_sessionstart.php';

$img_urlError="";
$nameError="";
$cuisineError="";
$short_descriptionError="";
$telError="";
$websiteError="";
$streetError="";
$postal_codeError="";
$cityError="";	

$error = false;

if(isset($_POST['create'])) {

	$id= $_POST['restaurant_id'];
	$img_url= $_POST['img_url'];
	$name= $_POST['name'];
	$cuisine= $_POST['cuisine'];
	$short_description= $_POST['short_description'];
	$tel= $_POST['tel'];
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
	if(empty($cuisine)){
		$error = true;
		$cuisineError = "Please put what category it fits in";
	}
	if(empty($short_description)){
		$error = true;
		$short_descriptionError = "...and don\'t forget to be honest";
	}
	if(empty($tel)){
		$error = true;
		$websiteError = "Tell a phone, I need you!";
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
		$query = "INSERT INTO restaurants (img_url, name, cuisine, short_description, tel, website, street, postal_code, city)
		VALUES ('$img_url', '$name', '$cuisine', '$short_description', '$tel', '$website', '$street', '$postal_code', '$city');"; 
		
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been created!';
				$_SESSION['msg_type'] = 'success';
		    } else {
		        echo "Error while adding record: " . mysqli_error($conn);
		    }
	}
	header('location: ../restaurants.php');
	$conn->close();
	ob_end_flush(); //why do I really need this?
}