<?php
require_once 'a_sessionstart.php';

$img_urlError="";
$nameError="";
$event_dateError="";
$event_timeError="";
$ticket_priceError="";
$websiteError="";
$streetError="";
$postal_codeError="";
$cityError="";

if(isset($_POST['create'])) {

	################################
	require_once 'a_validation.php';
	################################

	if (!$error) {
		$query = "INSERT INTO concerts (img_url, name, event_date, event_time, ticket_price, website, street, postal_code, city)
		VALUES ('$img_url', '$name', '$event_date', '$event_time', '$ticket_price', '$website', '$street', '$postal_code', '$city');"; 
		
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been created!';
				$_SESSION['msg_type'] = 'success';
		    } else {
		        echo "Error while adding record: " . mysqli_error($conn);
		    }
	}
	header('location: ../concerts.php');
	$conn->close();
	ob_end_flush(); //why do I really need this?
}