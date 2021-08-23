<?php
    include 'connection.php';

    //---------------------------------------------------

    //判斷是否上傳成功
    if($_POST["PASSWORD"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["PASSWORD"]; 
        $two = $_POST["EMAIL"]; 
        $three = $_POST["ADDRESS"];
        $four = $_POST["FULLNAME"];
        $five = $_POST["BIRTHDAY"];
        $six = $_POST["MEMBERID"];
        //=======================================================

        $sql = "UPDATE Member SET PASSWORD = ? , EMAIL = ? , ADDRESS = ? , FULLNAME = ? , BIRTHDAY = ? WHERE MEMBERID = ?";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);
        $statement->bindValue(3 , $three);
        $statement->bindValue(4 , $four);
        $statement->bindValue(5 , $five);
        $statement->bindValue(6 , $six);

        $statement->execute();
    }
?>