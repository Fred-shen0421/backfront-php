<?php

       include 'connection.php';
       //---------------------------------------------------

       //建立SQL
       $sql = "INSERT INTO N_ORDER_LIST(ORDERLISTID, MEMBERID, PRODUCTID, PRODUCTNAME) VALUES ('王小明', 'refrg', NOW())";

       //執行
       $pdo->exec($sql);


?>