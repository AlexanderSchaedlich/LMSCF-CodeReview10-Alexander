<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM registered_users WHERE userId = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update user</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Full Name</th>
               <td><input type="text"  name="name" placeholder ="Full Name" value="<?php echo $data['userName'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Email</th>
               <td><input type= "text" name="email"  placeholder="Email" value ="<?php echo $data['userEmail'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['userId']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button">Back</button ></a ></td>
           </tr>
       </table>
   </form>

</fieldset >

</body>
</html>

<?php
}
?>