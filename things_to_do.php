<?php
require_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Things to Do</title>
		<!----------meta, stylesheets---------->
		<?php include_once 'head_part.php';?>
	</head>
	<body>
		<!----------action message----------->
		<?php include_once 'message.php';?>
		<!----------header---------->
		<?php include_once 'header.php';?>
		<!----------main---------->
		<main class="container" id="main">
			<div class="row">
				<!----------add thing to do PLUS---------->	
	<!-- 			<div class="col-md-6 col-lg-4 mb-4">	
					<div class="card h-100 d-flex justify-content-center align-items-center ">
						<a href="create_things_to_do.php"><i class="fas fa-plus"></i></a>
					</div>
				</div> -->
				<!----------add thing to do FORM----------->
				<?php
				if (isset($_SESSION['admin'])) {
					include_once 'create_things_to_do.php';
				}
				?>
				<!----------continue main---------->
				<?php
				$sql = "SELECT * FROM things_to_do";
				$result = $conn->query($sql);
				if ($result->num_rows > 0): ?>
		     		<?php while($row = $result->fetch_assoc()): ?>
		     	<div class="col-md-6 col-lg-4 mb-4">	
					<div class="card h-100">
						<div class="img-container-custom d-flex justify-content-center align-items-center">
							<a href="<?php echo $row['img_url']; ?>"><img class="card-img-top cover" src="<?php echo $row['img_url']; ?>" alt="Card image cap"><a>
						    <a href="<?php echo $row['website']; ?>"><div class="img-overlay text">Visit Organiser</div></a>
						</div>
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['name']; ?></h5>
							<p class="card-text"><?php echo $row['type']; ?></p>
							<p class="card-text"><?php echo $row['short_description']; ?></p>
						</div>
						<div class="card-footer mt-auto">
							<a href="<?php echo $row['website']; ?>"><small class="text-muted"><?php echo $row['website']; ?></small></a>
							<br>
							<small class="text-muted"><?php echo $row['street'].', '.$row['postal_code'].' '.$row['city']; ?></small>
							<?php if (isset($_SESSION['admin'])) { ?>
							<br>
							<div class="mt-2">
								<a href="update_things_to_do.php?update=<?php echo $row['to_do_id']; ?>" class="btn btn-warning">Update</a>
								<a href="actions/a_delete_to_do.php?delete=<?php echo $row['to_do_id']; ?>" class="btn btn-danger">Delete</a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
					<?php endwhile ?>
				<?php endif ?>
				<?php $conn->close(); ?>
			</div>
		</main>
		<!----------footer---------->
		<?php require_once 'footer.php';?>
		<!----------scripts---------->
		<?php include_once 'scripts.php';?>
	</body>
</html>