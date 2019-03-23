<?php
ob_start();
session_start();
if(isset($_SESSION['user'])!="" ){
  header("Location: ../home.php");
}
include_once 'db_connect.php'; //what's the difference include_once/require_once


if($_POST) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$password')";
   if($conn->query($sql) === TRUE) {
       echo "<p>You have successfully sigend up</p>";
       echo "<a href='../signup.php'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Login</button></a>";
   } else {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $conn->close();
}

?>
<?php ob_end_flush(); ?>