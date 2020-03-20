<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $pass = hash('sha256', $pass);

   $sql = "INSERT INTO registered_users (userName, userEmail, userPass) VALUES ('$name', '$email', '$pass')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>