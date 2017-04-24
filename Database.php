<?php

  class DatabaseAdaptor {
    private  $DB;
    // Make a connection to an existing data based named 'quotes' that has table quotations
    public function __construct() {
      $db = 'mysql:dbname=quotations;host=127.0.0.1';
      $user = 'root';
      $password = '';

      try {
        $this->DB = new PDO ( $db, $user, $password );
        $this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      } catch ( PDOException $e ) {
          echo ('Bailey writes: Error establishing Connection!!!!');
          exit();
      }
    }
      // Return all quotations records as an associative array.
      public function getQuotesAsArray() {
        $stmt = $this->DB->prepare ( "SELECT * FROM  quotes ORDER BY rank DESC, date DESC");
        $stmt->execute();
        return $stmt->fetchAll ( PDO::FETCH_ASSOC );
      }
      // Get the name of the author
      public function getAuthor($id) {
        $result = $this->DB->prepare("SELECT * FROM authors WHERE id = $id");
        $result->execute();
        return $result->fetchAll( PDO::FETCH_ASSOC );
      }
      public function incrementRank($id) {
        $temp = $this->DB->prepare("SELECT * FROM quotes WHERE quote_ID = $id");
        $temp->execute();
        $temp = $temp->fetchAll( PDO::FETCH_ASSOC );
        $num = $temp[0]['rank'];
        $num = $num + 1;
        $result = $this->DB->prepare("UPDATE quotes SET rank = $num WHERE quote_ID = $id");
        $result->execute();
      }
      public function decrementRank($id) {
        $temp = $this->DB->prepare("SELECT * FROM quotes WHERE quote_ID = $id");
        $temp->execute();
        $temp = $temp->fetchAll( PDO::FETCH_ASSOC );
        $num = $temp[0]['rank'];
        $num = $num - 1;
        $result = $this->DB->prepare("UPDATE quotes SET rank = $num WHERE quote_ID = $id");
        $result->execute();
      }
      public function addQuote($quote, $author) {
        $stmt = $this->DB->prepare ( "SELECT * FROM  quotes ORDER BY quote_ID DESC");
        $stmt->execute();
        $stmt = $stmt->fetchAll ( PDO::FETCH_ASSOC );
        $quote_id = $stmt[0]['quote_ID'];
        (int)$quote_id = $quote_id + 1;
        $stmt2 = $this->DB->prepare ( "SELECT * FROM  quotes ORDER BY author_id DESC" );
        $stmt2->execute();
        $stmt2 = $stmt2->fetchAll ( PDO::FETCH_ASSOC );
        $author_id = $stmt[0]['author_id'];
        $author_id = $author_id + 1;
        $temp = $this->DB->prepare("INSERT INTO quotes (quote, author_id, quote_ID) VALUES ('$quote', $author_id, $quote_id)");
        $temp->bindParam( 'quote', $quote);
        $temp->execute();
        $temp2 = $this->DB->prepare("INSERT INTO authors VALUES('$author', $author_id)");
        $temp->bindParam( 'quote', $author);
        $temp2->execute();
      }
  }
  // Test code can only be used temporarily here.
  $myDatabaseFunctions = new DatabaseAdaptor();
//  $array = $myDatabaseFunctions->getQuotesAsArray();
//  foreach ( $array as $record ) {
//    echo $record ['author_id'] . ' ' . $record ['rank'] . ' ' . $record ['quote'] . PHP_EOL;
//  }
