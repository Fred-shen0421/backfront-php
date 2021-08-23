<?php

       include 'connection.php';

       //---------------------------------------------------

       //建立SQL
       $sql = "UPDATE member SET PWD = '852369' WHERE Name = '王小明'";

       //執行
       $pdo->exec($sql);
       
?>