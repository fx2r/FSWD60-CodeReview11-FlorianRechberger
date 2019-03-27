<?php
ob_start();
session_start();
if(isset($_SESSION['user'])!="" ){
  header("Location: ../home.php");
}
include_once 'db_connect.php'; //what's the difference include_once/require_once
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sigend up</title>
  <!----------meta, stylesheets---------->
  <?php include_once '../head-part.php' //error in console because of wrong level for custom css?>
</head>
<body>
  <!----------main---------->
  <?php
  if($_POST) {
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql = "INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$password')";
     if($conn->query($sql) === TRUE) {
          
     echo ' 
      <main class="d-flex align-items-center flex-column pt-5 pb-5">
        <p>You have successfully sigend up</p>
        <div>
          <button href="../index.php" type="submit" class="btn btn-success mr-3">Login</button>
          <a href="../signup.php">go back</a>
        </div>
      </main>
      ';
     } else {
      echo '
      <main class="container pt-5 pb-4">
          <div class="form-group row justify-content-center">
            <div class="col">
              <p>Error '.$sql.' '.$connect->connect_error.'</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col">
              <button href="../signup.php" type="submit" class="btn btn-warning mr-3">Try again</button>
            </div>
          </div>
      </main>';
     }

     $conn->close();
  }

  ?>
</body>
</html>
<?php ob_end_flush(); ?>
