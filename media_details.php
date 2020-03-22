<?php require_once 'manage/actions/db_connect.php'; ?>

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
				<a class="nav-item nav-link" href="publishers.php">Publishers</a>
			</div>
		</div>
	</nav>

	<div class="container">
		<?php 
			$sql = "select 
			media.id, media.title, media.image, media.ISBN, media.short_description,
			media.publish_date, media.type, media.availability,
			author.f_name, author.l_name,
			publisher.name 
			from media
			inner join author on author.id = media.fk_author
			inner join publisher on publisher.id = media.fk_publisher
			where media.id = {$id}";
			$result = $connect->query($sql);

			$row = $result->fetch_assoc();

			$availability;
			if($row['availability'] == 0){
				$availability = "reserved";
			}elseif($row['availability'] == 1){
				$availability = "available";
			}
			echo "
				<header>
					<h1 class='text-center p-5'>" 
					. $row['f_name'] . " " . $row['l_name'] . ": "
					. $row['title'] . "</h1>
					<img src='" . $row['image'] . "' 
					alt='" . $row['title'] . "' 
					style='width: 100%; height: auto;'>
					<br><br>
				</header>

				<main>
					<h5>" . $row['type'] . "</h5>
					<h5>ISBN: " . $row['ISBN'] . "</h5>
					<h5>Publisher: " . $row['name'] . "</h5>
					<h5>Publish Date: " . $row['publish_date'] . "</h5>
					<h5>Availability: " . $availability . "</h5>
					<h5>" . $row['short_description'] . "</h5>
					<br>
					<a class='btn btn-secondary' href='media.php'>Back</a>
				</main>
			"; 
		?>
	</div>

	<footer>
		<div class="text-center bg-dark text-white p-3 mt-5">
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