<?php
      include 'connection.php';
      
      $aucID = $_POST['aucid'];
      
      $sql = "SELECT * FROM AUCTIONINFO WHERE AUCTIONID = ?";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $aucID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>