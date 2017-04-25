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
    public function addUser($firstName, $lastName, $email, $password) {
      $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
      $data = $this->DB->prepare("INSERT INTO accounts (email, firstName, lastName, password) VALUES ('$email', '$firstName', '$lastName', '$hashed_pwd')");
      $data->execute();
    }
    public function logIn($email, $password) {
      $data = $this->DB->prepare("SELECT * FROM accounts WHERE email = '$email'");
      $data->execute();
      $data = $data->fetchAll( PDO::FETCH_ASSOC );
      if(password_verify($password, $data[0]['password']) == 1) {
        session_start();
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
      $stmt = $this->DB->prepare ( "SELECT * FROM accounts WHERE email = '$userName'");
      $stmt->execute();
      $stmt = $stmt->fetchAll( PDO::FETCH_ASSOC );
      if($stmt.length == 0)
        return true;
      return false;
    }

      // Return all quotations records as an associative array.
//      public function getQuotesAsArray() {
//        $stmt = $this->DB->prepare ( "SELECT * FROM  quotes ORDER BY rank DESC, date DESC");
//        $stmt->execute();
//        return $stmt->fetchAll ( PDO::FETCH_ASSOC );
//      }
  }
  // Test code can only be used temporarily here.
  $myDatabaseFunctions = new DatabaseAdaptor();
//  $array = $myDatabaseFunctions->getQuotesAsArray();
//  foreach ( $array as $record ) {
//    echo $record ['author_id'] . ' ' . $record ['rank'] . ' ' . $record ['quote'] . PHP_EOL;
//  }
