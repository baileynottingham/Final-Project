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
      if ($_SESSION['email'] == "admin"){
        header("Location: ./purchases.php");
      }else{
        header("Location: ./index.php");
      }
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
    setcookie("item1", "", -1, '/');
    setcookie("item2", "", -1, '/');
    setcookie("item3", "", -1, '/');
    setcookie("item4", "", -1, '/');
    setcookie("item5", "", -1, '/');
    setcookie("item6", "", -1, '/');
    setcookie("item7", "", -1, '/');
    header("Location: ./index.php");
  }
  else if(isset($_POST["remove"])) {
    if(isset($_POST["item1"])) {
      $temp = (int)$_COOKIE['totalItems'] - (int)$_COOKIE['item1'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item1', '0', 30, '/');
    }
    if(isset($_POST["item2"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item2'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item2', '0', 30, '/');
    }
    if(isset($_POST["item3"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item3'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item3', '0', 30, '/');
    }
    if(isset($_POST["item4"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item4'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item4', '0', 30, '/');
    }
    if(isset($_POST["item5"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item5'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item5', '0', 30, '/');
    }
    if(isset($_POST["item6"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item6'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item6', '0', 30, '/');
    }
    if(isset($_POST["item7"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item7'];
      setcookie('totalItems', $temp, 30, '/');
      setcookie('item7', '0', 30, '/');
    }
    header("Location: ./cart.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
