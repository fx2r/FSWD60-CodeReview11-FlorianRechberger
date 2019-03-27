<?php
include_once 'actions/a_sessionstart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home - Welcome to Travel-o-matic</title>
	<!----------meta, stylesheets---------->
	<?php include_once 'head-part.php'?>
</head>
<body>
	<!----------header---------->
	<?php include_once 'header.php';?>
	<!----------main---------->
	<main>
		<section class="jumbotron jumbotron-fluid py-5 mb-5">
			<div class="container">
				<h1 class="display-3">Welcome to Vienna (Wien)</h1>
				<p class="lead">Have you ever been to this beautiful city, or wanted to find out more about it? Maybe you have shockingly  realised that there are no kangaroos in Austria and badly need advice what to do in this town?</p>	
				<hr class="my-4">
				<p>Vienna has been waiting for you</p>
				<a class="btn btn-info btn-lg" href="#" role="button">Learn more</a>
			</div>
		</section>
		<section class="container d-flex mb-5">		
		<?php
			$sql1 = "SELECT name AS ttd 
	        FROM things_to_do;
	       	";
	       	$sql2 = "SELECT name AS concert 
	        FROM concerts;
	       	";
	       	$sql3 = "SELECT name AS restaurant 
	        FROM restaurants;
	       	";
	        $result1 = $conn->query($sql1);
	        $result2 = $conn->query($sql2);
	        $result3 = $conn->query($sql3);
	    ?>
			<div class="p-4 bg-light flex-fill border border-info">
				<a href="things-to-do.php#main"><h2 class="pb-3 text-center">Things to do</h2></a>
				<ul>
				<?php
			    if ($result1->num_rows > 0) {
	         		while($row = $result1->fetch_assoc()) {
	         			echo '<li>'.$row['ttd'].'</li>';
					}
				}
				?>
				</ul>
			</div>
			<div class="p-4 mx-4 bg-light flex-fill border border-info">
				<a href="concerts.php#main"><h2 class="pb-3 text-center">Concerts</h2></a>
				<ul>
				<?php
			    if ($result2->num_rows > 0) {
	         		while($row = $result2->fetch_assoc()) {
	         			echo '<li>'.$row['concert'].'</li>';
					}
				}
				?>
				</ul>
			</div>
			<div class="p-4 bg-light flex-fill border border-info">
				<a href="restaurants.php#main"><h2 class="pb-3 text-center">Restaurants</h2></a>
				<ul>
				<?php
			    if ($result3->num_rows > 0) {
	         		while($row = $result3->fetch_assoc()) {
	         			echo '<li>'.$row['restaurant'].'</li>';
					}
				}
				?>
				</ul>
			</div>
		</section>
		
	</main>
	<!----------footer---------->
	<?php require_once 'footer.php';?>
	<!----------scripts---------->
	<?php include_once 'scripts.php'?>
</body>
</html>
