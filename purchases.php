<!DOCTYPE html>
<html>
<head>
  <title>Purchases</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <form id="logout" action="index.php" method="post"/>
    <input type="hidden" name="logout" value="true" />
    <input type="submit" value="Log Out" />
  </form>
  <h1> List of Purchases </h1>
    <?php
      require_once './Database.php';
      $purchases = $myDatabaseFunctions->purchaseList();
      foreach ($purchases as $row){
    ?>
      <p> 
      <?= $row['firstName'] ?> <?= $row['lastName'] ?> ordered <?= $row['item1'] ?> soccer balls, <?= $row['item2'] ?> basketballs, 
      <?= $row['item3'] ?> footballs, <?= $row['item4'] ?> golf balls, <?= $row['item5'] ?> hockey pucks, <?= $row['item6'] ?> tennis balls, and <?= $row['item7'] ?> baseballs. 
      </p>
    <?php } ?>
</body>
</html>