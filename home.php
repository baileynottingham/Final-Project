<!-- Index Page -->
<!-- This whill contain all our products of images and buttons below them that we can add them to cart -->
<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Online Store</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="Cookie.js"></script>
    <script type="text/javascript" src="prototype.js"></script>
  <head>
  <body>
      <h1>We Got Balls! Sporting Goods</h1>
      <?php
        $check = 0;
        if(isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
          $check = 1;
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
      Quantity:
      <select id="soccerList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="soccerButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="basketball.JPEG" alt="Basketball">
      Quantity:
      <select id="basektballList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="basketballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="football.png" alt="Football">
      Quantity:
      <select id="footballList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="footballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="golfball.JPEG" alt="Golf Ball">
      Quantity:
      <select id="golfballList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="golfballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="hockey.JPEG" alt="Hockey Puck">
      Quantity:
      <select id="hockeyList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="hockeyButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="tennis.JPEG" alt="Tennis Ball">
      Quantity:
      <select id="tennisList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="tennisButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      <img src="baseball.JPEG" alt="Baseball">
      Quantity:
      <select id="baseballList">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <?php if($check == 1) { ?>
      <button id="baseballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button disabled="disbaled">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <hr />
      <p> Copyright &copy; 2017 Bailey Nottingham and Scott Perry.</p>
  </body>
</html>
