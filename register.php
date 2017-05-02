
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="./prototype.js"> </script>
  <script type="text/javascript" src="./events.js"> </script>
</head>
<body>
  <div class="header">
  <h1>Register</h1>
  </div>
  <div id="newAccount">
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
    <input id="submit" type="submit" value="Register" class="cartButtons"/>
    <br />
    <p id="status"></p>
  </form>
  <form id="newAccount" action="index.php">
    <input class="cartButtons" type="submit" value="Return Shopping"/>
  </form>
  </div>
</body>
<html>
