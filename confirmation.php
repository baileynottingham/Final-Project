<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmation</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
session_start();
    if(isset($_COOKIE["item1"])) {
      $temp = (int)$_COOKIE['totalItems'] - (int)$_COOKIE['item1'];
      setcookie('totalItems', $temp, 30, '/');
      $item1 = (int)$_COOKIE['item1'];
      setcookie('item1', '0', 30, '/');
    }else{
      $item1 = 0;
    }
    if(isset($_COOKIE["item2"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item2'];
      setcookie('totalItems', $temp, 30, '/');
      $item2 = (int)$_COOKIE['item2'];
      setcookie('item2', '0', 30, '/');
    }else{
      $item2 = 0;
    }
    if(isset($_COOKIE["item3"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item3'];
      setcookie('totalItems', $temp, 30, '/');
      $item3 = (int)$_COOKIE['item3'];
      setcookie('item3', '0', 30, '/');
    }else{
      $item3 = 0;
    }
    if(isset($_COOKIE["item4"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item4'];
      setcookie('totalItems', $temp, 30, '/');
      $item4 = (int)$_COOKIE['item4'];
      setcookie('item4', '0', 30, '/');
    }else{
      $item4 = 0;
    }
    if(isset($_COOKIE["item5"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item5'];
      setcookie('totalItems', $temp, 30, '/');
      $item5 = (int)$_COOKIE['item5'];
      setcookie('item5', '0', 30, '/');
    }else{
      $item5 = 0;
    }
    if(isset($_COOKIE["item6"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item6'];
      setcookie('totalItems', $temp, 30, '/');
      $item6 = (int)$_COOKIE['item6'];
      setcookie('item6', '0', 30, '/');
    }else{
      $item6 = 0;
    }
    if(isset($_COOKIE["item7"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item7'];
      setcookie('totalItems', $temp, 30, '/');
      $item7 = (int)$_COOKIE['item7'];
      setcookie('item7', '0', 30, '/');
    }else{
      $item7 = 0;
    }
    $totalItems = $item1 + $item2 + $item3 + $item4 + $item5 + $item6 + $item7;
    require_once './Database.php';
    $myDatabaseFunctions->addPurchase($_SESSION['email'], $item1, $item2, $item3, $item4, $item5, $item6, $item7);
?>
  <div class="header">
  <h1> Order Received </h1>
  </div>
  <form action="index.php" method="post"/>
    <input class="cartButtons" type="submit" value="Return Shopping" />
  </form>
  <p class="nums"> Thank you! Your order has been received. </p>
  <h2 class="subtotal"> Order Summary </h2>
  <?php if($item1 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Nike Soccer Ball</h4>
  <img src="soccer.JPEG" alt="Soccer Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$19.95</span></p>
  </div>
  <div class="quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item1 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item2 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Nike Elite Basketball</h4>
  <img src="basketball.JPEG" alt="Basketball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$25.00</span></p>
  </div>
  <div class="quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item2 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item3 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart"> Wilson NFL Football</h4>
  <img src="football.png" alt="Football" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$21.25</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item3 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item4 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Titleist Golfball</h4>
  <img src="golfball.JPEG" alt="Golf Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$3.50</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item4 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item5 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Hockey Puck</h4>
  <img src="hockey.JPEG" alt="Hockey Puck" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$12.75</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item5 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item6 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Wilson Tennis Ball</h4>
  <img src="tennis.JPEG" alt="Tennis Ball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$3.00</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item6 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php if($item7 > 0) { ?>
  <div class="itemCart">
  <h4 class="titleCart">Wilson Little League Baseball</h4>
  <img src="baseball.JPEG" alt="Baseball" class="cartImages">
  <div class="pricesAndQuantity">
  <div class="priceTag">
  <p class="priceP">Price: <span class="nums">$4.10</span></p>
  </div>
  <div class"quantity">
  <p class="quantityP">Quantity: <span class="nums"><?= $item7 ?></span></p>
  </div>
  </div>
  </div>
  <?php } ?>
  <?php
  $total = 0;
  $total = $total + ($item1 * 19.95) + ($item2 * 25.00) + ($item3 * 21.25) + ($item4 * 3.50) + ($item5 * 12.75) + ($item6 * 3.00) + ($item7 * 4.10);
  ?>
  <p class="subtotal">Subtotal (<?=$totalItems?> items): <span class="nums">$<?=number_format($total, 2)?></span></p>
</body>
</html>
