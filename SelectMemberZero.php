<?php

      include 'connection.php';
      //---------------------------------------------------
      //建立SQL語法
      $sql = "SELECT * FROM Member WHERE JEDGENUM = 0";
      $statement = $pdo->query($sql);
      $data = $statement->fetchAll();
      echo json_encode($data);    // 轉成JSON

?>