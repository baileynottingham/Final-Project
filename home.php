<!-- Index Page -->
<!-- This whill contain all our products of images and buttons below them that we can add them to cart -->
<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Online Store</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
  <head>
  <body>
      <h1>We Got Balls! Sporting Goods</h1>
      <?php
        if(isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
      ?>
      <p>Welcome back, <?= $_SESSION["firstName"] ?> <?= $_SESSION["lastName"] ?> </p>
      <form id="logout" action="index.php" method="post"/>
        <input type="hidden" name="logout" value="true" />
        <input type="submit" value="Log Out" />
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
      <br />
      <br />
      <img src="soccer.JPEG" alt="Soccer Ball">
      <br />
      <img src="basketball.JPEG" alt="Basketball">
      <br />
      <img src="football.png" alt="Football">
      <br />
      <img src="golfball.JPEG" alt="Golf Ball">
      <br />
      <img src="hockey.JPEG" alt="Hockey Puck">
      <br />
      <img src="tennis.JPEG" alt="Tennis Ball">
      <br />
      <img src="baseball.JPEG" alt="Baseball">
      <hr />
      <p> Copyright &copy; 2017 Bailey Nottingham and Scott Perry.</p>
  </body>
</html>
