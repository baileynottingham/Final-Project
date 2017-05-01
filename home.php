<!-- Index Page -->
<!-- This whill contain all our products of images and buttons below them that we can add them to cart -->
<?php session_start() ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Online Store</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="Cookie.js"></script>
    <script type="text/javascript" src="prototype.js"></script>
  <head>
  <body>
      <div class="header">
      <h1>We Got Balls! Sporting Goods</h1>
      </div>
      <?php
        $check = 0;
        if(isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
          $check = 1;
      ?>
      <p class="welcome">Welcome back, <?= $_SESSION["firstName"] ?> <?= $_SESSION["lastName"] ?> </p>
      <form id="logout" action="index.php" method="post"/>
        <input type="hidden" name="logout" value="true" />
        <input class="homeButtons" type="submit" value="Log Out" />
      </form>
      <form id="cart" action="cart.php" method="post"/>
        <input type="hidden" name="cart" value="true" />
        <input class="homeButtons" type="submit" value="View Shopping Cart" />
      </form>
      <p id="total">Total Items in Cart: </p>
      <?php
        }
        else {
       ?>
        <p class="welcome">Sign in or register to start adding items to your cart</p>
        <button class="homeButtons"><a href="user.php">Log In or Register</a></button>
      <?php
        }
      ?>
      <br />
      <br />
      <div class="item">
      <img src="soccer.JPEG" alt="Soccer Ball">
      <p>Price $19.95</p>
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
      <button class="cartButtons" id="soccerButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons"disabled="disbaled" id="soccerButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="basketball.JPEG" alt="Basketball">
      <p>Price $25.00</p>
      Quantity:
      <select id="basketballList">
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
      <button class="cartButtons" id="basketballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="basketballButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="football.png" alt="Football">
      <p>Price $21.25</p>
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
      <button class="cartButtons" id="footballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="footballButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="golfball.JPEG" alt="Golf Ball">
      <p>Price $3.50</p>
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
      <button class="cartButtons" id="golfballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="golfballButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="hockey.JPEG" alt="Hockey Puck">
      <p>Price $12.75</p>
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
      <button class="cartButtons" id="hockeyButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="hockeyButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="tennis.JPEG" alt="Tennis Ball">
      <p>Price $3.00</p>
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
      <button class="cartButtons" id="tennisButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="tennisButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      <br />
      </div>
      <div class="item">
      <img src="baseball.JPEG" alt="Baseball">
      <p>Price $4.10</p>
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
      <button class="cartButtons" id="baseballButton">Add to Cart!</button>
      <?php }
      else { ?>
      <button class="cartButtons" disabled="disbaled" id="baseballButton">Sign in to start adding items to your cart!</button>
      <?php } ?>
      </div>
      <div id="footer">
      <hr />
      <p> Copyright &copy; 2017 Bailey Nottingham and Scott Perry.</p>
      </div>
  </body>
</html>
