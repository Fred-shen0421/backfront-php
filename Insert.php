<?php

       //MySQL相關資訊
       $db_host = "127.0.0.1";
       $db_user = "root";
       $db_pass = "root";
       $db_select = "thevroom";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       //---------------------------------------------------

       //建立SQL
       $sql = "INSERT INTO N_ORDER_LIST(ORDERLISTID, MEMBERID, PRODUCTID, PRODUCTNAME) VALUES ('王小明', 'refrg', NOW())";

       //執行
       $pdo->exec($sql);


?>