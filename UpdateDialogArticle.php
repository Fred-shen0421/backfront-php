<?php
    include 'connection.php';

    //---------------------------------------------------

    //判斷是否上傳成功
    if($_POST["SUBJECTNAME"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["SUBJECTNAME"]; 
        $two = $_POST["CONTENT"]; 
        $three = $_POST["ARTICLEID"];
        //=======================================================

        $sql = "UPDATE FORUM SET DATE = DATE(NOW()) , SUBJECTNAME = ? , CONTENT = ? WHERE ARTICLEID = ?";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);
        $statement->bindValue(3 , $three);

        $statement->execute();
    }
?>