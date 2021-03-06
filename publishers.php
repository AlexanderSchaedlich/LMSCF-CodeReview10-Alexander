<?php require_once 'manage/actions/db_connect.php'; ?>

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
				<a class="nav-item nav-link" href="index.php">Home</a>
				<a class="nav-item nav-link" href="media.php">Media</a>
				<a class="nav-item nav-link" href="#">Publishers</a>
			</div>
		</div>
	</nav>

	<header>
		<h1 class="text-center p-5">Publishers</h1>
	</header>

	<main>
		<div class="container">
			<?php 
				$sql = "select * from publisher";
				$result = $connect->query($sql);

				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()) {
						echo "
							<div class='p-3'>
								<div class='row'>
									<div class='col-3'>
										<a href='publishers_media.php?id=" . $row['id'] . "'>
											<h4>" . $row['name'] . "</h4>
										</a>
									</div>

									<div class='col-9'>
										<p>" . $row['adress'] . "</p>
										<p>size: " . $row['size'] . "</p>
									</div>
								</div>
							</div>
						";
					}
				}
			?>
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