<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
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
  <?php echo $_COOKIE["item1"] ?>
  
  <?php } ?>
</body>
</html>
