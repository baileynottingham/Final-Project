<?php
  if(isset($_POST["firstName"])) {
    
      header("Location: index.php");
  }
  else {
    require_once ("./home.php");
  }
 ?>
