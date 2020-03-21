<?php 
require_once 'actions/db_connect.php';

$error = false;
$titleError = '';
$imageError = '';
$authorError = '';
$isbnError = '';
$descriptionError = '';
$dateError = '';
$publisherError = '';
$typeError = '';
$availabilityError = '';
$success = '';
$insertError = '';

if($_POST) {
  $title = $_POST['title'];
  $image = $_POST['image'];
  $fk_author = $_POST['fk_author'];
  $ISBN = $_POST['ISBN'];
  $short_description = $_POST['short_description'];
  $publish_date = $_POST['publish_date'];
  $fk_publisher = $_POST['fk_publisher'];
  $type = $_POST['type'];
  $availability = $_POST['availability'];

  // input validation

  if ($title == '') {
    $error = true;
    $titleError = "Please enter a title.";
  }

  if ($image == '') {
    $error = true;
    $imageError = "Please enter an image.";
  }

  if ($fk_author == '') {
    $error = true;
    $authorError = "Please enter an author.";
  }

  if ($ISBN == '') {
    $error = true;
    $isbnError = "Please enter an ISBN.";
  }

  if ($short_description == '') {
    $error = true;
    $descriptionError = "Please enter a description.";
  }

  if ($publish_date == '') {
    $error = true;
    $dateError = "Please enter a publish date.";
  }
  
  if ($fk_publisher == '') {
    $error = true;
    $publisherError = "Please enter a publisher.";
  }

  if ($type == '') {
    $error = true;
    $typeError = "Please enter a media type.";
  }

  if ($availability == '') {
    $error = true;
    $availabilityError = "Please enter an availability status (true / false).";
  }

  if(!$error){
    $sql = "INSERT INTO media (title, image, fk_author, ISBN, short_description, publish_date, fk_publisher, type, availability) VALUES ('$title', '$image', '$fk_author', '$ISBN', '$short_description', '$publish_date', '$fk_publisher', '$type', '$availability')";
    if($connect->query($sql) === TRUE) {
      $success = 'Inserted successfully!' ;
    } else  {
      $insertError = 'Error ' . $sql . ' ' . $connect->connect_error;
    }
  }

  $connect->close();
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
        <a class="nav-item nav-link" href="../index.php">Home</a>
        <a class="nav-item nav-link" href="../media.php">Media</a>
        <a class="nav-item nav-link" href="../publishers.php">Publishers</a>
      </div>
    </div>
  </nav>

  <header>
    <h1 class="text-center p-5">Insert</h1>
    <p class="text-center text-success"><?php echo $success; ?></p>
    <p class="text-center text-success"><?php echo $insertError; ?></p>
  </header>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-0 col-md-3 col-lg-3"></div>

        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="p-3 bg-dark text-white text-center rounded-lg">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              <div class="form-group">
                <label for="newTitle">Title</label>
                <input type="text" name="title" class="form-control" id="newTitle">
                <span class="text-danger"><?php echo $titleError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Image</label>
                <input type="text" name="image" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $imageError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Foreign Key Author</label>
                <input type="text" name="fk_author" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $authorError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">ISBN</label>
                <input type="text" name="ISBN" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $isbnError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Short Description</label>
                <input type="text" name="short_description" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $descriptionError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Publish Date</label>
                <input type="date" name="publish_date" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $dateError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Foreign Key Publisher</label>
                <input type="text" name="fk_publisher" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $publisherError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Type</label>
                <input type="text" name="type" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $typeError; ?></span>
              </div>
              <div class="form-group">
                <label for="newImage">Availability</label>
                <input type="text" name="availability" class="form-control" id="newImage">
                <span class="text-danger"><?php echo $availabilityError;?></span>
              </div>
              <button type="submit" class="btn btn-success">Insert</button>
              <a href="../media.php" class="btn btn-primary">Back</a>
            </form>
          </div>
        </div>

        <div class="col-sm-0 col-md-3 col-lg-3"></div>
      </div>
    </div>
    <br><br><br>
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