<?php

ob_start();
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
	header("Location: ../home.php"); //block login page, i.e. index, from being accessed if user or admin is logged in, instead redirect to home
	exit;
}

############login###########
#guest
if (isset($_GET['guest'])) {
	$_SESSION['guest'] = $session;
	header("Location: ../home.php");
}
#user or admin
if (isset($_POST['login'])) {
	$email = ($_POST['email']);
	$password = ($_POST['password']);

	$query=mysqli_query($conn, "SELECT user_id, first_name, email, password, role FROM users WHERE email='$email'");
	$row=mysqli_fetch_array($query, MYSQLI_ASSOC);
	$count = mysqli_num_rows($query);
	if($count == 1 && $row['password']==$password) {
		if($row['role']=='admin'){
			$_SESSION['admin'] = $row['user_id'];
			header("Location: ../home.php");
		} elseif ($row['role']=='user'){
		$_SESSION['user'] = $row['user_id'];
		header("Location: ../home.php");
		}
	} elseif ($count == 1 && $row['password']!=$password) { //if user/admin exists in db, but password doesn't match...
		if($row['role']=='admin' || 'user'){ //...a GET-variable 'error2' (no matter if user or admin) will be added to...
			header("Location: ../index.php?error2"); //...the index.php (login page), which asks, whether password has been forgotten 
		} 
	} else {
	header("Location: ../index.php?error"); //if no such user/admin exists in the db, an error will display
	}
}

$conn->close();
ob_end_flush();