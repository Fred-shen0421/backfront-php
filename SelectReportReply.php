<?php
      $db_host = "127.0.0.1";
      $db_user = "root";
      $db_pass = "root";
      $db_select = "thevroom";
      $dsn = "mysql:host=".$db_host.";dbname=".$db_select;
      $pdo = new PDO($dsn, $db_user, $db_pass);
      
      $repID = $_POST['repid'];
    
      $sql = "SELECT a.* ,b.REASON FROM FORUMREPLY a JOIN REPORTDIALOG b ON a.MESSAGECONTENT = b.MESSAGECONTENT WHERE FORUMREPLYID = ? ";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $repID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>