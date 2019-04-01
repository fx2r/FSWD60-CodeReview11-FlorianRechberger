<?php
require_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Things to Do</title>
	<!----------meta, stylesheets---------->
	<?php include_once 'head-part.php'?>
</head>
<body>
	<!----------action----------->
	<?php require_once 'actions/a_delete_to_do.php';?>
	<!----------action message----------->
	<?php include_once 'message.php'?>
	<!----------header---------->
	<?php include_once 'header.php';?>
	<!----------main---------->
	<main class="container" id="main">
		<div class="row">
			<?php
			$sql = "SELECT * FROM things_to_do";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
	     		while($row = $result->fetch_assoc()) {
	     			echo '
	     	<div class="d-flex col-sm-6 col-lg-4 mb-4">	
				<div class="card d-flex">
					<img class="card-img-top cover" src="'.$row['img_url'].'" alt="Card image cap">
					<div class="card-body mb-auto">
						<h5 class="card-title">'.$row['name'].'</h5>
						<p class="card-text mt-auto">'.$row['type'].'</p>
						<p class="card-text">'.$row['short_description'].'</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">'.$row['website'].'</small>
						<br>
						<small class="text-muted">'.$row['street'].', '.$row['postal_code'].' '.$row['city'].'</small>';
						if (isset($_SESSION['admin'])) {
							echo '
							<br>
							<div class="mt-2">
								<a href="things-to-do.php?update='.$row['to_do_id'].'" class="btn btn-warning">Update</a>
								<a href="actions/a_delete_to_do.php?delete='.$row['to_do_id'].'" class="btn btn-danger">Delete</a>
							</div>
							';
						};
						echo '
					</div>
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
