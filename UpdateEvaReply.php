<?php

      include 'connection.php';
      $eid = $_POST["eid"];
      //---------------------------------------------------
      // echo $_POST["eid"];
      // echo $_POST["status"];
      //建立SQL
      $sql = " UPDATE EVALUATE SET STATUS = '已回覆' where ID = ? " ;
      //    if ($_POST["status"]="已回覆"){
      //        $sql ="UPDATE EVALUATE SET STATUS = 已回覆 where ID = 1";
      //        echo '123';
      //    }else{
      //        $sql ="UPDATE EVALUATE SET STATUS = 未回覆 where ID = ?";
      //        echo '456';
      //    }

      $statement = $pdo -> prepare($sql);
      $statement -> bindValue(1 , $eid);

      //執行
      $statement -> execute();
?>