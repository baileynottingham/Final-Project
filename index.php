<?php


  if(isset($_POST["newUser"])) {
    session_start();
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    require_once './Database.php';
    $myDatabaseFunctions->addUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']);
    header("Location: ./index.php");
  }
  else if(isset($_POST["login"])) {
    require_once './Database.php';
    $num = $myDatabaseFunctions->logIn($_POST['email'], $_POST['password']);
    if($num == true) {
      session_start();
      $_SESSION['firstName'] = $myDatabaseFunctions->firstName($_POST['email']);
      $_SESSION['lastName'] = $myDatabaseFunctions->lastName($_POST['email']);
      $_SESSION['email'] = $_POST['email'];
      header("Location: ./index.php");
    }
    else {
      session_start();
      $_SESSION['error'] = -1;
      header("Location: ./user.php");
    }
  }
  else if(isset($_POST["logout"])) {
    session_start();
    session_destroy();
    session_regenerate_id(TRUE);
    header("Location: ./index.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
