
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <h1>Register</h1>
  <form id="newAccount" action="index.php" method="post">
    First Name: <input type="text" name="firstName" required="required" />
    <br />
    <br />
    Last Name: <input type="text" name="lastName" required="required" />
    <br />
    <br />
    Email: <input id="user" type="text" name="email" required="required" />
    <br />
    <br />
    Password: <input type="password" name="password" required="required" />
    <br />
    <br />
    <input type="hidden" name="newUser" />
    <input type="submit" />
  </form>
</body>
<html>
