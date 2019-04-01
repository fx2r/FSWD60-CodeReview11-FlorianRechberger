<?php
require_once 'a_sessionstart.php';
?>
<!--<?php/*

if(isset($_GET["id"])){
	$id = $_GET["id"];
	if(isset($_GET["delete"])){
		$sql = "DELETE FROM things_to_do WHERE to_do_id=$id";
		mysqli_query($conn,$sql);
		echo "You have successfully deleted this";
	}
}

if(isset($_GET["delete"])){
		$id = $_GET["id"];
		echo "are you sure you want to delete it?<br>
		<a href='../things_to_do.php?id='.$id.'&delete' class='btn btn-danger'>Delete</a>";
	}

if($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM things_to_do WHERE to_do_id = {$id}";
   if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>";
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM things_to_do WHERE to_do_id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:things-to-do.php#main.php");
*/?>-->

<?php
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
    header('location: ../things-to-do.php');
}
?>

<!-- for saving
<?php
	/*$_SESSION['message'] = "Destination has been saved!";
	$_SESSION['msg_type'] = 'success';*/
?> -->