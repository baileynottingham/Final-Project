
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <h2>Log in</h2>
  <form id="login" action="login.php" method="post">
    Username: <input type="text" name="name" required="required"/>
    <br />
    Password: <input type="password" name="name" required="required" />
    <br />
    <input type="submit" value="Log in" />
  </form>
  <form id="register" action="register.php" method="post">
    <p> Not registered? Register here! </p>
    <input type="submit" value="Register" />
  </form>
</body>
</html>
