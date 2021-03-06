<?php require_once 'actions/db_connect.php';?>

<?php 
	$id;

	if ($_GET['id']) {
		$id = $_GET['id'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
				<a class="nav-item nav-link" href="../index.php">Home</a>
				<a class="nav-item nav-link" href="../media.php">Media</a>
				<a class="nav-item nav-link" href="../publishers.php">Publishers</a>
			</div>
		</div>
	</nav>

	<header>
		<h1 class="text-center p-5">Delete</h1>
		<p class="text-center text-warning">Do you really want to delete this media?</p>
		<br>

		<div class="d-flex justify-content-center">
			<div>
				<form action='<?php echo "actions/a_delete.php?id=" . $id ?>' method="post">
					<input type="submit" name="submit" class='btn btn-success' value="Yes, delete it!">
					<a href="../media.php">
						<button type="button" class='btn btn-primary'>No, go back!</button>
					</a>
				</form>
			</div>
		</div>
		<br>
	</header>

	<main>
		<div class="container">
			<?php 
				$sql = "select media.id, media.title, media.image, media.short_description, 
				author.f_name, author.l_name from media
				inner join author on author.id = media.fk_author
				where media.id = {$id}";
				$result = $connect->query($sql);

				$row = $result->fetch_assoc();

				echo "
					<div class='p-3'>
						<div class='row'>
							<div class='col-sm-12 col-md-3 col-lg-3'>
								<img class='fitImage' 
								src='" . $row['image'] . "' 
								alt='" . $row['title'] . "'>
							</div>

							<div class='col-sm-12 col-md-9 col-lg-9'>
								<h4>" . $row['f_name'] . " " . $row['l_name'] . ": " 
								. $row['title'] . "</h4>
								<p>" . $row['short_description'] . "</p>
							</div>
						</div>
					</div>
				";
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