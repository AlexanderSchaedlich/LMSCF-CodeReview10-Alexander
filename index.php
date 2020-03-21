<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Big Library</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Big Library</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="#">Home</a>
				<a class="nav-item nav-link" href="media.php">Media</a>
				<a class="nav-item nav-link" href="publishers.php">Publishers</a>
			</div>
		</div>
	</nav>

	<header>
		<div id="hero"></div>
	</header>

	<main>
		<div class="container">
			<div class="py-5">
				<div class="pb-5">
					<div class="row">
						<div class="col-sm-12 col-md-7 col-lg-7">
							<div class="d-flex align-items-center">
								<div>
									<h1>Unique Folios</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-5 col-lg-5">
							<img class="fitImage" src="https://cdn.pixabay.com/photo/2017/01/07/15/07/bible-1960635__480.jpg" alt="book">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-7">
						<div class="d-flex align-items-center">
							<div>
								<h1>Professional Team</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-5 col-lg-5">
						<img class="fitImage" src="https://cdn.pixabay.com/photo/2017/08/02/00/49/people-2569234__480.jpg" alt="book">
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="text-center bg-dark text-white p-3">
			&copy; Big Library 2020
		</div>
	</footer>

	<script
	src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script>
		$("div:has(>.fitImage)").addClass("divOfFittingImage");
	</script>
</body>
</html>