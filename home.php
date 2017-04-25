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
      <button id="soccer">Add to Cart!</button>
      <br />
      <img src="basketball.JPEG" alt="Basketball">
      <button id="basketball">Add to Cart!</button>
      <br />
      <img src="football.png" alt="Football">
      <button id="football">Add to Cart!</button>
      <br />
      <img src="golfball.JPEG" alt="Golf Ball">
      <button id="golfball">Add to Cart!</button>
      <br />
      <img src="hockey.JPEG" alt="Hockey Puck">
      <button id="hockey">Add to Cart!</button>
      <br />
      <img src="tennis.JPEG" alt="Tennis Ball">
      <button id="tennis">Add to Cart!</button>
      <br />
      <img src="baseball.JPEG" alt="Baseball">
      <button id="baseball">Add to Cart!</button>
      <hr />
      <p> Copyright &copy; 2017 Bailey Nottingham and Scott Perry.</p>
  </body>
</html>
