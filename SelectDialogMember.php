<?php
      include 'connection.php';
      
      $userID = $_POST['userid'];
      
      $sql = "SELECT * FROM Member WHERE MEMBERID = ?";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $userID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>