<?php
      include 'connection.php';
      
      $carID = $_POST['carid'];
      
      $sql = "SELECT * FROM CARTYPE WHERE CARID = ?";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $carID);
      $statement->execute();

      $data = $statement->fetchAll();
      echo json_encode($data);
?>