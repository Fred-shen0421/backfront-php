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