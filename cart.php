<?php
//print_r($_COOKIE);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <script type="text/javascript" src="Cookie.js"></script>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <form action="index.php"/>
    <input type="submit" value="Back to Shopping" />
  </form>
  <?php
    //  echo $_COOKIE["totalItems"];
      if(isset($_COOKIE["item1"]) == false && isset($_COOKIE["item2"]) == false
      && isset($_COOKIE["item3"]) == false && isset($_COOKIE["item4"]) == false
      && isset($_COOKIE["item5"]) == false && isset($_COOKIE["item6"]) == false
      && isset($_COOKIE["item7"]) == false) {
  ?>
  <h3>Your Shopping Cart is empty.</h3>
  <?php }
  else {
  ?>
  <h1>Shopping Cart</h1>
  <hr />
  <?php if(isset($_COOKIE["item1"]) && $_COOKIE["item1"] > 0) { ?>
  <h4> Nike Soccer Ball</h4>
  <img src="soccer.JPEG" alt="Soccer Ball">
  <p>Quantity: <?= $_COOKIE["item1"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item1" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item2"]) && $_COOKIE["item2"] > 0) { ?>
  <h4> Nike Elite Basketball</h4>
  <img src="basketball.JPEG" alt="Basketball">
  <p>Quantity: <?= $_COOKIE["item2"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item2" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item3"]) && $_COOKIE["item3"] > 0) { ?>
  <h4> Wilson NFL Football</h4>
  <img src="football.png" alt="Football">
  <p>Quantity: <?= $_COOKIE["item3"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item3" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item4"]) && $_COOKIE["item4"] > 0) { ?>
  <h4>Titleist Golfball</h4>
  <img src="golfball.JPEG" alt="Golf Ball">
  <p>Quantity: <?= $_COOKIE["item4"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item4" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item5"]) && $_COOKIE["item5"] > 0) { ?>
  <h4>Hockey Puck</h4>
  <img src="hockey.JPEG" alt="Hockey Puck">
  <p>Quantity: <?= $_COOKIE["item5"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item5" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item6"]) && $_COOKIE["item6"] > 0) { ?>
  <h4>Wilson Tennis Ball</h4>
  <img src="tennis.JPEG" alt="Tennis Ball">
  <p>Quantity: <?= $_COOKIE["item6"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item6" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php if(isset($_COOKIE["item7"]) && $_COOKIE["item7"] > 0) { ?>
  <h4>Wilson Little League Baseball</h4>
  <img src="baseball.JPEG" alt="Baseball">
  <p>Quantity: <?= $_COOKIE["item7"] ?></p>
  <form action="index.php" method="post">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item7" value="true"/>
    <input type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  <hr />
  <?php } ?>
  <?php } ?>
</body>
</html>
