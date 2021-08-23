<?php
    include 'connection.php';

    //---------------------------------------------------

    //判斷是否上傳成功
    if($_POST["PRODUCTID"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["PRODUCTID"]; 
        //=======================================================

        $sql = "UPDATE ACCESSORIES SET JUDGENUM = 0 WHERE PRODUCTID = ?";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(1 , $one);

        $statement->execute();
    }
?>