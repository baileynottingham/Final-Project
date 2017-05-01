<!DOCTYPE html>
<html>
<head>
  <title>Purchases</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <div class="header">
  <h1> List of Purchases </h1>
  </div>
  <form id="logout" action="index.php" method="post"/>
    <input type="hidden" name="logout" value="true" />
    <input class="cartButtons" type="submit" value="Log Out" />
  </form>
    <?php
      require_once './Database.php';
      $purchases = $myDatabaseFunctions->purchaseList();
      foreach ($purchases as $row){
        $total = 0;
    ?>
      <p class="report"> 
      <?= $row['firstName'] ?> <?= $row['lastName'] ?> from <?= $row['email'] ?> : 
      <?php if ($row['item1'] != 0){ $total += ($row['item1'] * 19.95);?> 
        <?= ($row['item1']) ?> soccer balls,
      <?php } ?>
      <?php if ($row['item2'] != 0){ $total += ($row['item2'] * 25.00);?> 
        <?= ($row['item2']) ?> basketballs,
      <?php } ?> 
      <?php if ($row['item3'] != 0){ $total += ($row['item3'] * 21.25);?> 
        <?= ($row['item3']) ?> footballs,
      <?php } ?> 
      <?php if ($row['item4'] != 0){ $total += ($row['item4'] * 3.50);?> 
        <?= ($row['item4']) ?> golf balls,
      <?php } ?> 
      <?php if ($row['item5'] != 0){ $total += ($row['item5'] * 12.75);?> 
        <?= ($row['item5']) ?> hockey pucks,
      <?php } ?> 
      <?php if ($row['item6'] != 0){ $total += ($row['item6'] * 3.00);?> 
        <?= ($row['item6']) ?> tennis balls,
      <?php } ?> 
      <?php if ($row['item7'] != 0){ $total += ($row['item7'] * 4.10);?> 
        <?= ($row['item7']) ?> baseballs
      <?php } ?> 
      TOTAL: $<?= number_format($total,2) ?> + $5.99 S&H
      </p>
    <?php } ?>
</body>
</html>