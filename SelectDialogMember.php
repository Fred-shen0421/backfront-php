<?php
      $db_host = "127.0.0.1";
      $db_user = "root";
      $db_pass = "root";
      $db_select = "thevroom";
      $dsn = "mysql:host=".$db_host.";dbname=".$db_select;
      $pdo = new PDO($dsn, $db_user, $db_pass);
      
      $userID = $_POST['userid'];
      
      $sql = "SELECT * FROM Member WHERE MEMBERID = ?";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $userID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>