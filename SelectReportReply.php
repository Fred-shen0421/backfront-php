<?php
      include 'connection.php';
      
      $repID = $_POST['repid'];
    
      $sql = "SELECT a.* ,b.REASON FROM FORUMREPLY a JOIN REPORTDIALOG b ON a.MESSAGECONTENT = b.MESSAGECONTENT WHERE FORUMREPLYID = ? ";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $repID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>