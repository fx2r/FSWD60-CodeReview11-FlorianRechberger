<?php
include_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Things to Do</title>
	<!----------meta, stylesheets---------->
	<?php include_once 'head-part.php'?>
</head>
<body>
	<!----------header---------->
	<?php include_once 'header.php';?>
	<!----------main---------->
	<main class="container" id="main">
		<div class="card-columns">
			<?php
			$sql = "SELECT * FROM things_to_do;";
			$result = $conn->query($sql);
			if (isset($_SESSION['admin'])) {
				$admin = '
				<hr>
				<a href="things-to-do.php?id='.$row['to_do_id'].'" class="btn btn-warning mb-2 mt-2 mr-2">Update</a>
				<a href="things-to-do.php?id='.$row['to_do_id'].'" class="btn btn-danger m-2">Delete</a>
				';
			} else {
				$admin = '';
			}
			if ($result->num_rows > 0) {
         		while($row = $result->fetch_assoc()) {
         			echo '
			<div class="card">
				<img class="card-img-top img-thumbnail" src="'.$row['img_url'].'" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">'.$row['name'].'</h5>
					<p class="card-text">'.$row['type'].'</p>
					<p class="card-text">'.$row['short_description'].'</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">'.$row['website'].'</small>
					<br>
					<small class="text-muted">'.$row['street'].', '.$row['postal_code'].' '.$row['city'].'</small>
					'.$admin.'
				</div>
			</div>
					';
				}
			}
			?>
		</div>
	</main>
	<!----------footer---------->
	<?php require_once 'footer.php';?>
	<!----------scripts---------->
	<?php include_once 'scripts.php'?>
</body>
</html>
