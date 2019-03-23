<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

<fieldset>
   <legend>Login <?php if (isset($_GET['error'])) {$errMSG = "- Please try again. Or sign up if you are new to my travel blog";
           echo "$errMSG";
          }?></legend>

   <form action="actions/a_login.php" method="post">
       <table cellspacing="0" cellpadding="0">
          <tr>
             <th>E-mail</th>
             <td><input type="text" name="email" placeholder="e-mail" required/></td>
          </tr>
          <tr>
             <th>Password</th>
             <td><input type="text" name="password" placeholder="Password" required/></td>
          </tr>
          <tr>
             <td><button type="submit" name="login">Login</button></td>
             <td><a href="signup.php"><button type="button">Sign up</button></a></td>
          </tr>
       </table>
   </form>

</fieldset>

</body>
</html>
</html>