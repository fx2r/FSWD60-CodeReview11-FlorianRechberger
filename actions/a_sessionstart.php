<?php
session_start();
require_once 'db_connect.php';
// if session empty - redirect to login
if(!isset($_SESSION['user']) && !isset($_SESSION['admin']) && !isset($_SESSION['guest'])) {
	header("Location: index.php");
	exit;
}
if(isset($_SESSION["user"])){
	$session = $_SESSION["user"];
	$res=mysqli_query($conn, "SELECT * FROM users WHERE user_id={$session}");
	$user=$res->fetch_assoc(); //to be displayed for login next to sign out button, ref in 'header.php' and 'nav.php'
}elseif(isset($_SESSION["admin"])){
	$session = $_SESSION["admin"];
}

