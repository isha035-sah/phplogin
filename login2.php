<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="login.css" rel="stylesheet">

  </head>
  <body>

    <!-- <?php if (isset($failed)) { ?>
    <div id="login-bad">Invalid email or password.</div>
    <?php } ?> -->

    <form id="login-form" method="post" target="_self" action="welcome.php">
      <!-- <h1>PLEASE SIGN IN</h1> -->
      <label for="location">Location</label>
      <input type="text" name="location" required>
      <label for="password">Age</label>
      <input type="number" name="age" required>
      <label for="password">University</label>
      <input type="text" name="University" required>
      <!-- <input type="submit" value="Sign Up"> -->
    </form>
  </body>
</html>
