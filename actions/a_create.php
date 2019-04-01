<!-- couln't make this file work - problem was that I didn't know how to display the error messages
inside settings.php withouth moving most of the php code -->
<?php
require_once 'a_sessionstart.php';
?>

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
		    header('location: ../settings.php');
		}
		
	}
?>