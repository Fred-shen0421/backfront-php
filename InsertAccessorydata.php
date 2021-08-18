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
    if($_POST["BIGSORT"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["BIGSORT"];
        $two = $_POST["SORT"];    //檔案名稱含副檔名
        $three = $_POST["PRODUCTNAME"];
        $four = $_POST["PRODUCTPRICE"];
        $five = $_POST["PRODUCTINFO"];
        $fileName = $_FILES["PRODUCTIMG"]["name"];    //檔案名稱含副檔名        
        $filePath_Temp = $_FILES["PRODUCTIMG"]["tmp_name"];   //Server上的暫存檔路徑含檔名        
        $fileType = $_FILES["PRODUCTIMG"]["type"];    //檔案種類        
        $fileSize = $_FILES["PRODUCTIMG"]["size"];    //檔案尺寸
        //=======================================================

        $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
        $filePath = $ServerRoot."/Project_thevroom/public/AccessoryImage/".$fileName;
        $realPath = "/AccessoryImage/".$fileName;
        
        echo '123';
        echo $realPath;
        move_uploaded_file($filePath_Temp, $filePath);
                                    
        $sql = "INSERT INTO ACCESSORIES(BIGSORT, SORT, PRODUCTNAME, PRODUCTPRICE, PRODUCTINFO, PRODUCTIMG) VALUES (?, ? , ? , ? , ? , ? )";
        

        // $pdo->exec($sql);
        // echo '1222';

        $statement = $pdo->prepare($sql);
        // $statement->bindValue(1 , $randomId);
        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);
        $statement->bindValue(3 , $three);
        $statement->bindValue(4 , $four);
        $statement->bindValue(5 , $five);
        $statement->bindValue(6 , $realPath);
        $statement->execute();
    }
?>