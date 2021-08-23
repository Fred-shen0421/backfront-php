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
       $eid = $_POST["eid"];
       //---------------------------------------------------
      // echo $_POST["eid"];
      // echo $_POST["status"];
       //建立SQL
       $sql = "UPDATE EVALUATE SET STATUS = '已回覆' where ID = ?" ;
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