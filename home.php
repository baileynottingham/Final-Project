<!-- Index Page -->
<!-- This whill contain all our products of images and buttons below them that we can add them to cart -->
<!DOCTYPE html>
<html>
  <head>
    <title>Online Store</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
  <head>
  <body>
      <h1>We got Balls Sporting Goods</h1>
      <?php
      session_start();
      echo $_SESSION["firstName"];
        if(isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
      ?>
      <p>Welcome Back, <?= $_SESSION["firstName"] ?> <?= $_SESSION["lastName"] ?> </p>
      <form id="logout" action="index.php" method="post"/>
        <input type="submit" value="Log Out" />
        <input type="hidden" name="logout" value="true" />
      </form>
      <?php
        }
        else {
       ?>
        <p>Sign in or register to start adding items to your cart</p>
        <button><a href="user.php">Log In or Register</a></button>
      <?php
        }
      ?>
      <hr />
      <p> Copyright &copy; 2017 Bailey Nottingham and Scott Perry.</p>
  </body>
</html>
