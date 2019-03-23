<!DOCTYPE html>
<html>
<head>
  <meta charset=UTF-8">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

<fieldset>
   <legend>Sign up</legend>

   <form action="actions/a_signup.php" method="post">
       <table cellspacing="0" cellpadding="0">
           <tr>
               <th>First Name</th>
               <td><input type="text" name="first_name" placeholder="First Name" /></td>
           </tr>    
           <tr>
               <th>Last Name</th>
               <td><input type="text" name="last_name" placeholder="Last Name" /></td>
           </tr>
           <tr>
               <th>E-mail</th>
               <td><input type="text" name="email" placeholder="e-mail" /></td>
           </tr>
           <tr>
               <th>Password</th>
               <td><input type="text" name="password" placeholder="Password" /></td>
           </tr>
           <tr>
               <td><button type="submit">Sign up</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>