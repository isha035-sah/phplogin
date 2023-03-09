
<!-- // (B) LOGIN PAGE HTML ?> -->
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page Demo</title>
    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <?php if (isset($failed)) { ?>
    <div id="login-bad">Invalid email or password.</div>
    <?php } ?>



    <form id="login-form" method="post" target="_self" action="welcome.php">
      <h1>FIRST PAGE</h1>
      <label for="name">name</label>
      <input type="text" name="user" required>
      <label for="PhoneNumber">PhoneNumber</label>
      <input type="number" name="phonenumber" required>
      <label for="Email">Email</label>
      <input type="email" name="Email"  pattern=".+@globex\.com" size="30"   required>



       <input type="submit"  name="btn-atc" value="Sign Up">
    </form>
  </body>
</html>

<?php
// (A) LOGIN CHECKS
require "login2.php";
