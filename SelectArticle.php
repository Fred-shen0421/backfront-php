<?php

        include 'connection.php';
       //---------------------------------------------------

       //建立SQL語法
       $sql = "SELECT * FROM FORUM";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       //將二維陣列取出顯示其值
    //    foreach($data as $index => $row){
	//        echo $row["ID"];   //欄位名稱
	//        echo " / ";
	//        echo $row["PASSWORD"];    //欄位名稱
	//        echo " / ";
	//        echo $row["GENDER"];    //欄位名稱	       
    //    }

       echo json_encode($data);    // 轉成JSON

?>