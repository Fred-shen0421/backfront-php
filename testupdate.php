<?php
    include 'connection.php';
    //---------------------------------------------------

    //判斷是否上傳成功
    if($_POST["MESSAGECONTENT"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["MESSAGECONTENT"];
        $two = $_POST["FORUMREPLYID"]; 
    
        //=======================================================
                                    
        $sql = "UPDATE FORUMREPLY SET DATE = NOW() , MESSAGECONTENT = ？ WHERE FORUMREPLYID = ？";


        $statement = $pdo->prepare($sql);

        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);

        $statement->execute();
    }
?>