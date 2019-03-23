<?php
ob_start();
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
	header("Location: ../home.php");
	exit;
}

if( isset($_POST['login']) ) {
	$email = ($_POST['email']);
	$password = ($_POST['password']);

	$res=mysqli_query($conn, "SELECT user_id, first_name, email, password, role FROM users WHERE email='$email'");
	$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
	$count = mysqli_num_rows($res);
	if($count == 1 && $row['password']==$password) {
		if($row['role']=='admin'){
			$_SESSION['admin'] = $row['user_id'];
			header("Location: ../home.php");
		}elseif ($row['role']=='user'){
			$_SESSION['user'] = $row['user_id'];
			header("Location: ../home.php");
		}
	} else {
	header("Location: ../index.php?error");
	}
}

?>
<?php ob_end_flush(); ?>