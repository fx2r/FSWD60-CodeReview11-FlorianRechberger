<?php

require_once 'a_sessionstart.php';

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$query = ("DELETE FROM things_to_do WHERE to_do_id = $id");
	//short version:
	//$mysqli->query("DELETE FROM things_to_do WHERE id=$id") or die($mysqli->error());
	if (mysqli_query($conn, $query)) {
		$_SESSION['message'] = 'Record has been deleted!';
		$_SESSION['msg_type'] = 'danger';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    header('location: ../things_to_do.php');
}

$conn->close();