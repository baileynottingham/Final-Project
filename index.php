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
  else if(isset($_POST["remove"])) {
    if(isset($_POST["item1"])) {
      $temp = (int)$_COOKIE['totalItems'] - (int)$_COOKIE['item1'];
      setcookie('totalItems', $temp,'/');
      setcookie('item1', '0', 30, '/');
    }
    if(isset($_POST["item2"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item2'];
      setcookie('totalItems', $temp,'/');
      setcookie('item2', '0', 30, '/');
    }
    if(isset($_POST["item3"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item3'];
      setcookie('totalItems', $temp, '/');
      setcookie('item3', '0', 30, '/');
    }
    if(isset($_POST["item4"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item4'];
      setcookie('totalItems', $temp, '/');
      setcookie('item4', '0', 30, '/');
    }
    if(isset($_POST["item5"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item5'];
      setcookie('totalItems', $temp, '/');
      setcookie('item5', '0', 30, '/');
    }
    if(isset($_POST["item6"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item6'];
      setcookie('totalItems', $temp, '/');
      setcookie('item6', '0', 30, '/');
    }
    if(isset($_POST["item7"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item7'];
      setcookie('totalItems', $temp, '/');
      setcookie('item7', '0', 30, '/');
    }
    header("Location: ./cart.php");
  }
  else if(isset($_POST["purchase"])) {
    session_start();
    if(isset($_COOKIE["item1"])) {
      $temp = (int)$_COOKIE['totalItems'] - (int)$_COOKIE['item1'];
      setcookie('totalItems', $temp,'/');
      $item1 = (int)$_COOKIE['item1'];
      setcookie('item1', '0', 30, '/');
    }else{
      $item1 = 0;
    }
    if(isset($_COOKIE["item2"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item2'];
      setcookie('totalItems', $temp,'/');
      $item2 = (int)$_COOKIE['item2'];
      setcookie('item2', '0', 30, '/');
    }else{
      $item2 = 0;
    }
    if(isset($_COOKIE["item3"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item3'];
      setcookie('totalItems', $temp, '/');
      $item3 = (int)$_COOKIE['item3'];
      setcookie('item3', '0', 30, '/');
    }else{
      $item3 = 0;
    }
    if(isset($_COOKIE["item4"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item4'];
      setcookie('totalItems', $temp, '/');
      $item4 = (int)$_COOKIE['item4'];
      setcookie('item4', '0', 30, '/');
    }else{
      $item4 = 0;
    }
    if(isset($_COOKIE["item5"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item5'];
      setcookie('totalItems', $temp, '/');
      $item5 = (int)$_COOKIE['item5'];
      setcookie('item5', '0', 30, '/');
    }else{
      $item5 = 0;
    }
    if(isset($_COOKIE["item6"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item6'];
      setcookie('totalItems', $temp, '/');
      $item6 = (int)$_COOKIE['item6'];
      setcookie('item6', '0', 30, '/');
    }else{
      $item6 = 0;
    }
    if(isset($_COOKIE["item7"])) {
      $temp = $_COOKIE['totalItems'] - $_COOKIE['item7'];
      setcookie('totalItems', $temp, '/');
      $item7 = (int)$_COOKIE['item7'];
      setcookie('item7', '0', 30, '/');
    }else{
      $item7 = 0;
    }
    require_once './Database.php';
    $myDatabaseFunctions->addPurchase($_SESSION['email'], $item1, $item2, $item3, $item4, $item5, $item6, $item7);
    header("Location: ./index.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
