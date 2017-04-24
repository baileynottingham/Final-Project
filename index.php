<?php
  if(isset($_POST["firstName"])) {
    require_once './Database.php';
    $myDatabaseFunctions->addUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']);
    session_start();
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    header("Location: ./home.php");
  }
  else if(isset($_POST["logout"])) {
    session_destroy();
    session_regenerate_id(TRUE);
    header("Location: ./home.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
