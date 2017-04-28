<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <script type="text/javascript" src="Cookie.js"></script>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <?php
      if($_COOKIE["totalItems"] == 0) {
  ?>
  <h3>Your Shopping Cart is empty.</h3>
  <?php }
  else {
  ?>
  <h1>Shopping Cart</h1>
  <hr />
  <?php if($_COOKIE["item1"] > 0) { ?>
  <h4> Nike Soccer Ball</h4>
  <img src="soccer.JPEG" alt="Soccer Ball">
  <p>Quantity: <?= $_COOKIE["item1"] ?></p>
  <button id="removeBasketball">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item2"] > 0) { ?>
  <h4> Nike Elite Basketball</h4>
  <img src="basketball.JPEG" alt="Basketball">
  <p>Quantity: <?= $_COOKIE["item2"] ?></p>
  <button id="removeBasketball">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item3"] > 0) { ?>
  <h4> Wilson NFL Football</h4>
  <img src="football.png" alt="Football">
  <p>Quantity: <?= $_COOKIE["item3"] ?></p>
  <button id="removeFootball">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item4"] > 0) { ?>
  <h4>Titleist Golfball</h4>
  <img src="golfball.JPEG" alt="Golf Ball">
  <p>Quantity: <?= $_COOKIE["item4"] ?></p>
  <button id="removeGolfball">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item5"] > 0) { ?>
  <h4>Hockey Puck</h4>
  <img src="hockey.JPEG" alt="Hockey Puck">
  <p>Quantity: <?= $_COOKIE["item5"] ?></p>
  <button id="removeHockey">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item6"] > 0) { ?>
  <h4>Wilson Tennis Ball</h4>
  <img src="tennis.JPEG" alt="Tennis Ball">
  <p>Quantity: <?= $_COOKIE["item6"] ?></p>
  <button id="removeTennis">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php if($_COOKIE["item7"] > 0) { ?>
  <h4>Wilson Little League Baseball</h4>
  <img src="baseball.JPEG" alt="Baseball">
  <p>Quantity: <?= $_COOKIE["item7"] ?></p>
  <button id="removeBaseball">Remove From Cart</button>
  <hr />
  <?php } ?>
  <?php } ?>
</body>
</html>
