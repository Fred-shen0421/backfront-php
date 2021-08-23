<?php
      include 'connection.php';
      
      $artID = $_POST['artid'];
      
      $sql = "SELECT * FROM FORUM WHERE ARTICLEID = ?";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $artID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>