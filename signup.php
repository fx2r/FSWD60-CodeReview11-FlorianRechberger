<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!----------meta, stylesheets---------->
  <?php include_once 'head-part.php'?>
</head>
<body>
  <!----------header---------->
  <?php include_once 'header-login-signup.php';?>
  <!----------main---------->
  <main class="container pt-5 pb-4">
    <form action="actions/a_signup.php" method="post" class="">
      <div class="form-group row justify-content-center">
        <label for="first_name" class="col-sm-2 col-form-label">First name</label>
        <div class="col-sm-8 col-lg-6 col-xl-5">
          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Jane" required>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label for="last_name" class="col-sm-2 col-form-label">Last name</label>
        <div class="col-sm-8 col-lg-6 col-xl-5">
          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Doe" required>
        </div>
      </div>
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
          <button type="submit" class="btn btn-success mr-3">Sign up</button>
          <a href="index.php">go back</a>
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