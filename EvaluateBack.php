<?php

       //MySQL相關資訊
       $db_host = "127.0.0.1";
       $db_user = "root";
       $db_pass = "root";
       $db_select = "thevroom";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass); //這些是自己定義的名稱，只要一樣就可以不是確定

       //---------------------------------------------------
       //建立SQL語法
       $sql = "SELECT * From EVALUATE";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->prepare($sql);
       $statement -> execute();

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();



       //將二維陣列取出顯示其值
       // foreach($data as $index => $row){
       //        echo $row["PRODUCTID"];
       //        echo " / ";
	//        echo $row["SORT"];   //欄位名稱
	//        echo " / ";
	//        echo $row["PRODUCTNAME"];    //欄位名稱
	//        echo " / ";
	//        echo $row["PRODUCTPRICE"];    //欄位名稱	
       //        echo " / ";
       //        echo $row["PRODCUTINFO"];
       //        // echo " / ";
       //        // echo $row["PRODUCTIMG"];
       // }

       echo json_encode($data);

?>
