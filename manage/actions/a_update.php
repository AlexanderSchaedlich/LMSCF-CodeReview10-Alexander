<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['name'];
   $email = $_POST['email'];

   $id = $_POST['id'];

   $sql = "UPDATE registered_users SET userName = '$name', userEmail = '$email' WHERE userId = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>