<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <div class="header">
  <h1>Log in</h1>
  </div>
  <div id="login">
  <form id="login" action="index.php" method="post">
    Email: <input type="text" name="email" required="required"/>
    <br />
    Password: <input type="password" name="password" required="required" />
    <br />
    <input type="submit" value="Log in" class="cartButtons"/>
    <input type="hidden" name="login"/>
    <?php
      if(isset($_SESSION['error']) == -1) {
    ?>
    <p id="incorrectPassword">Incorrect email or password.</p>
    <?php
    session_destroy();
    session_regenerate_id(TRUE);
      }
     ?>
  </div>
  </form>
  <div id="registerStyle">
  <form id="register" action="register.php" method="post">
    <p> Not registered? Register here! </p>
    <input type="submit" value="Register" class="cartButtons"/>
  </form>
  </div>
</body>
</html>
