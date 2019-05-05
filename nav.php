<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="home.php"><img src="sources/images/caffeine-structure-light.png" alt="Travel Blog" height="42px"></a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">TravelFox <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="things_to_do.php">Things to do</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="concerts.php">Concerts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="restaurants.php">Restaurants</a>
				</li>
				<?php 
				if (isset($_SESSION['admin'])): ?>
					<li class="nav-item">
						<a class="nav-link" href="settings.php">Settings</a>
					</li>
				<?php endif; ?>
			</ul>
			<p class="mb-0 pr-2 py-2 text-light d-none d-md-flex">
				<?php
				if (isset($_SESSION['admin'])) {
					echo "Logged in! (admin)";
				} elseif (isset($_SESSION['user'])) {
					echo "Logged in as ".$user["first_name"]."";
				}
				?>
			</p>
			<a href="actions/a_logout.php?logout"><button type='button' class='btn btn-secondary my-2 my-md-0' id='logout'>Sign Out</button></a>
		</div>
	</div>
</nav>