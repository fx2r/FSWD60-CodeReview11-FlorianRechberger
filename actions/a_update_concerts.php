<?php

require_once 'a_sessionstart.php';
//predefine the variables needed in our form when the update page is opend from another link to avoid an error
	$img_url = "";
	$name = "";
	$event_date = "";
	$event_time = "";
	$ticket_price = "";
	$website = "";
	$street = "";
	$postal_code = "";
	$city = "";
	$concert_id = "";
//polluting fields with values stored in our database
if(isset($_GET['update'])){
	$id = $_GET['update'];
	$sql = "SELECT * FROM concerts WHERE concert_id=$id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
		$img_url = $row['img_url'];
		$name = $row['name'];
		$event_date = $row['event_date'];
		$event_time = $row['event_time'];
		$ticket_price = $row['ticket_price'];
		$website = $row['website'];
		$street = $row['street'];
		$postal_code = $row['postal_code'];
		$city = $row['city'];
		$concert_id = $row['concert_id'];
}
//override fields with new inputs when the form is submitted
if(isset($_POST['update'])) {

	################################
	require_once 'a_validation.php';
	################################
	
	//if there's no error the entry will be updated into the database
	if (!$error) {
		$query = "UPDATE concerts SET 
		img_url = '$img_url',
		name = '$name',
		event_date = '$event_date',
		event_time = '$event_time',
		ticket_price = '$ticket_price',
		website = '$website',
		street = '$street',
		postal_code = '$postal_code',
		city = '$city'
		WHERE concert_id = $id"; 
		if (mysqli_query($conn, $query)) {
				$_SESSION['message'] = 'Record has been updated!';
				$_SESSION['msg_type'] = 'success';
				header('location: ../concerts.php'); //redirects back to the events' page 
				
	    } else {
	        echo 'Error while updating record: ' . mysqli_error($conn); //if sth wrong with the db connection
	    }
	//if input doesn't pass validation:
	} elseif($error) {
		//storing inputs in sessinos, so they don't get lost when redirecting back to update page
		$_SESSION['img_url'] = $img_url;
		$_SESSION['name'] = $name;
		$_SESSION['event_date'] = $event_date;
		$_SESSION['event_time'] = $event_time;
		$_SESSION['ticket_price'] = $ticket_price;
		$_SESSION['website'] = $website;
		$_SESSION['street'] = $street;
		$_SESSION['postal_code'] = $postal_code;
		$_SESSION['city'] = $city;
		header('location: ../update_concerts.php?update='.$id.''); //redirecting to update and id to 'stay on the same page'
	}
}
$conn->close();
ob_end_flush();
