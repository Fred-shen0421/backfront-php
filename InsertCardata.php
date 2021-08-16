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
    if($_POST["BRAND"] == ''){
        echo "上傳失敗: 錯誤代碼";
    }else{
        //取得上傳的檔案資訊=======================================
        $one = $_POST["BRAND"];    //檔案名稱含副檔名
        $two = $_POST["CARMODEL"];
        $three = $_POST["POWERTYPE"];
        $four = $_POST["ENGINETYPE"];
        $five = $_POST["TRANSMISSIONSYSTEM"];
        $six = $_POST["DRIVETYPE"];
        $seven = $_POST["MAXTORQUE"];
        $eight = $_POST["BODYTYPE"];
        $nine = $_POST["MODELSIZE"];
        $ten = $_POST["TRUNKSIZE"];
        $eleven = $_POST["DOOR"];
        $twelve = $_POST["DISPLACEMENT"];
        $thirteen = $_POST["PERFORMANCEDATA"];
        $fourteen = $_POST["CARPRICE"];
        $fifteen = $_POST["ENERGY"];
        $sixteen = $_POST["RATES"];
        $fileName = $_FILES["CARTYPEPHOTO"]["name"];    //檔案名稱含副檔名        
        $filePath_Temp = $_FILES["CARTYPEPHOTO"]["tmp_name"];   //Server上的暫存檔路徑含檔名        
        $fileType = $_FILES["CARTYPEPHOTO"]["type"];    //檔案種類        
        $fileSize = $_FILES["CARTYPEPHOTO"]["size"];    //檔案尺寸
        //=======================================================

        $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
        $filePath = $ServerRoot."/Project_thevroom/public/CartypeImage/".$fileName;
        $realPath = "/CartypeImage/".$fileName;

        move_uploaded_file($filePath_Temp, $filePath);

        $sql = "INSERT INTO CARTYPE(BRAND, CARMODEL, POWERTYPE, ENGINETYPE, TRANSMISSIONSYSTEM, DRIVETYPE, MAXTORQUE, BODYTYPE, MODELSIZE, TRUNKSIZE, DOOR, DISPLACEMENT, PERFORMANCEDATA, CARPRICE, ENERGY, RATES, CARTYPEPHOTO) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $pdo->exec($sql);  

        $statement = $pdo->prepare($sql);
        // $statement->bindValue(1 , $randomId);
        $statement->bindValue(1 , $one);
        $statement->bindValue(2 , $two);
        $statement->bindValue(3 , $three);
        $statement->bindValue(4 , $four);
        $statement->bindValue(5 , $five);
        $statement->bindValue(6 , $six);
        $statement->bindValue(7 , $seven);
        $statement->bindValue(8 , $eight);
        $statement->bindValue(9 , $nine);
        $statement->bindValue(10 , $ten);
        $statement->bindValue(11, $eleven);
        $statement->bindValue(12 , $twelve);
        $statement->bindValue(13 , $thirteen);
        $statement->bindValue(14 , $fourteen);
        $statement->bindValue(15 , $fifteen);
        $statement->bindValue(16 , $sixteen);
        $statement->bindValue(17 , $realPath);
        $statement->execute();

    }
?>