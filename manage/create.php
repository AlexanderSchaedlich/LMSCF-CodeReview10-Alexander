<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add User</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>
</head>
<body>

<fieldset>
   <legend>Add User</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Full Name</th>
               <td><input  type="text" name="name"  placeholder="Full Name" /></td>
           </tr>    
           <tr>
               <th>Email</th>
               <td><input  type="text" name= "email" placeholder="Email" /></td>
           </tr>
           <tr>
               <th>Password</th>
               <td><input type="text" name="pass" placeholder="Password" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert user</button></td>
               <td><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>