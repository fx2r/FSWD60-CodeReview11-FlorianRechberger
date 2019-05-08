<?php

require_once 'a_sessionstart.php';

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$query = ("DELETE FROM concerts WHERE concert_id = $id");
	//short version:
	//$mysqli->query("DELETE FROM concerts WHERE id=$id") or die($mysqli->error());
	if (mysqli_query($conn, $query)) {
		$_SESSION['message'] = 'Record has been deleted!';
		$_SESSION['msg_type'] = 'danger';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    header('location: ../concerts.php');
}

$conn->close();