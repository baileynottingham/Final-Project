<?php
  if(isset($_POST["firstName"])) {
      require_once './Database.php';
      $myDatabaseFunctions->addUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']);
      header("Location: index.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
