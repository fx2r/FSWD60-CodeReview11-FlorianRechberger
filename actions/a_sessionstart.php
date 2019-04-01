<?php
session_start();
require_once 'db_connect.php';
// if session empty - redirect to login
if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
	header("Location: index.php");
	exit;
}
if(isset($_SESSION["user"])){
	$session = $_SESSION["user"];
}else {
	$session = $_SESSION["admin"];

}
$res=mysqli_query($conn, "SELECT * FROM users WHERE user_id={$session}");
$name=$res->fetch_assoc(); //to be displayed for login next to sign out button, ref in 'header.php'
?>