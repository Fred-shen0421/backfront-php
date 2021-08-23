<?php

      include 'connection.php';
      //---------------------------------------------------

      $one = $_POST['FORUMREPLYID'];

      //建立SQL語法c
      $sql = "SELECT * FROM FORUMREPLY a RIGHT JOIN REPORTDIALOG b ON a.MESSAGECONTENT = b.MESSAGECONTENT";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $one);
      $statement->execute();
      //抓出全部且依照順序封裝成一個二維陣列
      $data = $statement->fetchAll();
      echo json_encode($data);    // 轉成JSON

?>