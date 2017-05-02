<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body id="cartBody">
  <form action="index.php"/>
    <input class="cartButtons" type="submit" value="Back to Shopping" />
  </form>
  <?php
    //  echo $_COOKIE["totalItems"];
      if(isset($_COOKIE["item1"]) == false && isset($_COOKIE["item2"]) == false
      && isset($_COOKIE["item3"]) == false && isset($_COOKIE["item4"]) == false
      && isset($_COOKIE["item5"]) == false && isset($_COOKIE["item6"]) == false
      && isset($_COOKIE["item7"]) == false) {
  ?>
  <h3 id="emptyCart">Your Shopping Cart is empty.</h3>
  <img src="homealone.png" alt="oh no!" id="homealone">
  <p id="emptycarttext">Don't worry! You can hit the "Back to Shopping" button to go back and start adding items to your cart.</p>
  <?php }
  else {
  ?>
  <div id="cartTitle">
  <h1>Shopping Cart</h1>
  </div>
  <?php if(isset($_COOKIE["item1"]) && $_COOKIE["item1"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Nike Soccer Ball</h4>
  <img src="soccer.JPEG" alt="Soccer Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$19.95</span></p>
  </div>
  <div class="quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item1"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item1" value="true"/>
    <input class="cartButtons" type="submit" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item2"]) && $_COOKIE["item2"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Nike Elite Basketball</h4>
  <img src="basketball.JPEG" alt="Basketball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$25.00</span></p>
  </div>
  <div class="quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item2"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item2" value="true"/>
    <input class="cartButtons" type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item3"]) && $_COOKIE["item3"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Wilson NFL Football</h4>
  <img src="football.png" alt="Football" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$21.25</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item3"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item3" value="true"/>
    <input class="cartButtons" type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item4"]) && $_COOKIE["item4"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Titleist Golfball</h4>
  <img src="golfball.JPEG" alt="Golf Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$3.50</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item4"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item4" value="true"/>
    <input class="cartButtons" type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item5"]) && $_COOKIE["item5"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Hockey Puck</h4>
  <img src="hockey.JPEG" alt="Hockey Puck" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$12.75</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item5"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item5" value="true"/>
    <input class="cartButtons" type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item6"]) && $_COOKIE["item6"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Wilson Tennis Ball</h4>
  <img src="tennis.JPEG" alt="Tennis Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$3.00</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item6"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item6" value="true"/>
    <input class="cartButtons"  type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php if(isset($_COOKIE["item7"]) && $_COOKIE["item7"] > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Wilson Little League Baseball</h4>
  <img src="baseball.JPEG" alt="Baseball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$4.10</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $_COOKIE["item7"] ?></span></p>
  </div>
  </div>
  <form action="index.php" method="post" class="removeCart">
    <input type="hidden" name="remove" value="true"/>
    <input type="hidden" name="item7" value="true"/>
    <input class="cartButtons"  type="submit" id="removeButton" value="Remove From Cart"/>
  </form>
  </div>
  <?php } ?>
  <?php
  $total = 0;
  $totalNum = 0;
  if(isset($_COOKIE["item1"]) == true) {
    $total = $total + ($_COOKIE["item1"] * 19.95);
    $totalNum = $totalNum + $_COOKIE["item1"];
  }
  if(isset($_COOKIE["item2"]) == true) {
    $total = $total + ($_COOKIE["item2"] * 25.00);
    $totalNum = $totalNum + $_COOKIE["item2"];
  }
  if(isset($_COOKIE["item3"]) == true) {
    $total = $total + ($_COOKIE["item3"] * 21.25);
    $totalNum = $totalNum + $_COOKIE["item3"];
  }
  if(isset($_COOKIE["item4"]) == true) {
    $total = $total + ($_COOKIE["item4"] * 3.50);
    $totalNum = $totalNum + $_COOKIE["item4"];
  }
  if(isset($_COOKIE["item5"]) == true) {
    $total = $total + ($_COOKIE["item5"] * 12.75);
    $totalNum = $totalNum + $_COOKIE["item5"];
  }
  if(isset($_COOKIE["item6"]) == true) {
    $total = $total + ($_COOKIE["item6"] * 3.00);
    $totalNum = $totalNum + $_COOKIE["item6"];
  }
  if(isset($_COOKIE["item7"]) == true) {
    $total = $total + ($_COOKIE["item7"] * 4.10);
    $totalNum = $totalNum + $_COOKIE["item7"];
  }
  ?>
  <p class="subtotal">Subtotal (<?=$totalNum?> items): <span class="nums">$<?=number_format($total, 2)?></span></p>
  <form action="checkout.php" method="post">
    <input type="hidden" name="totalPrice" value="<?=$total?>"/>
    <input class="cartButtons" type="submit" value="Check Out!" />
  </form>
  <?php } ?>
</body>
</html>
