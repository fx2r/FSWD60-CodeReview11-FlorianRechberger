<header>
	<!----------navbar---------->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
		        <a class="nav-link" href="things-to-do.php">Things to do</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="concerts.php">Concerts</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="restaurants.php">Restaurants</a>
		      </li>
		    </ul>
		    <label class='pr-2 pt-2 text-light d-none d-md-flex' for='logout'><?php
				if (isset($_SESSION['admin'])) {
					echo "Logged in! (admin)";
				} elseif (isset($_SESSION['user'])) {
					echo "Logged in as ".$name["first_name"]."";
				}
				?>
			</label>
		    <a href="actions/a_logout.php?logout"><button type='button' class='btn btn-secondary my-2 my-md-0' id='logout'>Sign Out</button></a>
		  </div>
		</nav>
		<!----------carousel---------->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="sources/images/placeimg_1000_480_nature_1.jpg" alt="First slide">
		  	  <div class="carousel-caption d-none d-md-block">
			    <h5>Somewhere</h5>
			    <p>Be a traveller, not a tourist.</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="sources/images/placeimg_1000_480_nature_2.jpg" alt="Second slide">
		  	  <div class="carousel-caption d-none d-md-block">
			    <h5>Not in Vienna</h5>
			    <p>Be a traveller, not a tourist.</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="sources/images/placeimg_1000_480_nature_3.jpg" alt="Third slide">
		  	  <div class="carousel-caption d-none d-md-block">
			    <h5>Not in Vienna</h5>
			    <p>Be a traveller, not a tourist.</p>
			  </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!----------breadcrumb---------->
		<div class="d-flex justify-content-center pt-3 pb-1">
			<p class="lead">not too exciting...</p>
		</div>
	</div>
</header>