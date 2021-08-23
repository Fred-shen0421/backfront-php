<?php
    include 'connection.php';

    //---------------------------------------------------

    //判斷是否上傳成功
    if($_POST["DURATION"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["DURATION"]; 
        $two = $_POST["RESERVEPRICE"]; 
        $three = $_POST["DESCRIPTION"];
        $four = $_POST["AUCTIONID"];
        //=======================================================

        $sql = "UPDATE AUCTIONINFO SET DURATION = ? , RESERVEPRICE = ? , DESCRIPTION = ? WHERE AUCTIONID = ?";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);
        $statement->bindValue(3 , $three);
        $statement->bindValue(4 , $four);

        $statement->execute();
    }
?>