<?php

  class DatabaseAdaptor {
    private  $DB;
    // Make a connection to an existing data based named 'quotes' that has table quotations
    public function __construct() {
      $db = 'mysql:dbname=users;host=127.0.0.1';
      $user = 'root';
      $password = '';

      try {
        $this->DB = new PDO ( $db, $user, $password );
        $this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      } catch ( PDOException $e ) {
          echo ('Bailey and Scott writes: Error establishing Connection!!!!');
          exit();
      }
    }
    public function purchaseList(){
      $data = $this->DB->prepare("SELECT firstName, lastName, email, item1, item2, item3, item4, item5, item6, item7 FROM accounts JOIN purchases ON id = userId");
      $data->execute();
      return $data->fetchAll( PDO::FETCH_ASSOC );
    }
    public function addPurchase($email, $item1, $item2, $item3, $item4, $item5, $item6, $item7) {
      $data = $this->DB->prepare("SELECT * FROM accounts WHERE email = '$email'");
      $data->execute();
      $data = $data->fetchAll( PDO::FETCH_ASSOC );
      $id = $data[0]['id'];
      $data = $this->DB->prepare("INSERT INTO purchases VALUES ('NULL', '$id', '$item1', '$item2', '$item3', '$item4', '$item5', '$item6', '$item7')");
      $data->execute();
    }
    public function addUser($firstName, $lastName, $email, $password) {
      $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
      $data = $this->DB->prepare("INSERT INTO accounts (email, firstName, lastName, password) VALUES ('$email', '$firstName', '$lastName', '$hashed_pwd')");
      $data->execute();
    }
    public function firstName($email) {
      $data = $this->DB->prepare("SELECT * FROM accounts WHERE email = '$email'");
      $data->execute();
      $data = $data->fetchAll( PDO::FETCH_ASSOC );
      return $data[0]['firstName'];
    }
    public function lastName($email) {
      $data = $this->DB->prepare("SELECT * FROM accounts WHERE email = '$email'");
      $data->execute();
      $data = $data->fetchAll( PDO::FETCH_ASSOC );
      return $data[0]['lastName'];
    }
    public function logIn($email, $password) {
      $data = $this->DB->prepare("SELECT * FROM accounts WHERE email = '$email'");
      $data->execute();
      $data = $data->fetchAll( PDO::FETCH_ASSOC );
      if(password_verify($password, $data[0]['password']) == 1) {
        $_SESSION['firstName'] = $data[0]['firstName'];
        $_SESSION['lastName'] = $data[0]['lastName'];
        $_SESSION['email'] = $data[0]['email'];
        return TRUE;
      }
      else {
        session_destroy();
        session_unset();
        return FALSE;
      }
    }
    //following is untested and might not work
    public function validUser($userName){
      $stmt = $this->DB->prepare ( "SELECT email FROM accounts WHERE email = :user ;");
      $stmt->bindParam('user', $userName);
      $stmt->execute();
      $row = $stmt->fetchAll( PDO::FETCH_ASSOC );
      if (count($row) == 0)
        return "true";
      return "false";
    }
  }

  $myDatabaseFunctions = new DatabaseAdaptor();

  if (isset($_POST['name'])){
    echo $myDatabaseFunctions->validUser($_POST['name']);
  }

?>
