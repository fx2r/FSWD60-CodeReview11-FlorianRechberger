<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <!----------meta, stylesheets---------->
  <?php include_once 'head_part.php'?>
</head>
<body>
  <!----------header---------->
  <?php include_once 'nav_register.php';?>
  <!----------main---------->
  <main class="container pt-5 pb-4">
    <form action="actions/a_login.php" method="post" class="">
      <?php
      if (isset($_GET['error'])) :?>
      <?php $errMSG = "Please try again. Or sign up if you are new to my travel blog" ?>
      <div class="form-group row justify-content-center">
          <label for="errorMSG" class="col-sm-2"></label>
          <div class="col-sm-8 col-lg-6 col-xl-5 text-warning" id="errorMSG">
            <span><?php echo $errMSG?></span>
          </div>
      </div>
      <?php endif ?>
      
      <?php if (isset($_GET['error2'])): ?>
      <?php $errMSG = "Have you forgotten your password?";?>
      <div class="form-group row justify-content-center">
          <label for="errorMSG" class="col-sm-2"></label>
          <div class="col-sm-8 col-lg-6 col-xl-5 text-warning" id="errorMSG">
            <span><?php echo $errMSG?></span>
          </div>
      </div>
      <?php endif ?>
      <div class="form-group row justify-content-center">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8 col-lg-6 col-xl-5">
          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="example@example.com" required>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-8 col-lg-6 col-xl-5">
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
        </div>
      </div>
      </fieldset>
      <div class="form-group row justify-content-center">
        <div class="d-none d-sm-flex col-sm-2">
        </div>
        <div class="col-sm-8 col-lg-6 col-xl-5">
          <button type="submit" class="btn btn-success mr-3 mb-1" name="login">Login</button>
          <a href="signup.php">sign up</a>
          <?php if (isset($_GET['error2'])): ?>
          <button class="btn btn-outline-warning m-0 my-3 my-sm-0 ml-sm-3"><a href="forgot_password.php" class="text-warning">Reset password</a></button>
          <?php endif ?>
          <br>
          <a href="actions/a_login.php?guest" class="font-weight-bold text-muted">Use guest account</a>
        </div>
      </div>
    </form>
  </main>
  <!----------footer---------->
  <?php require_once 'footer.php';?>
  <!----------scripts---------->
  <?php include_once 'scripts.php'?>
</body>
</html>
