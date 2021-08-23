<?php
    include 'connection.php';

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
        $seventeen = $_POST["CARID"];

        echo $seventeen;
        //=======================================================

        $sql = "UPDATE CARTYPE SET BRAND = ? , CARMODEL = ? , POWERTYPE = ? , ENGINETYPE = ? , TRANSMISSIONSYSTEM = ? , DRIVETYPE = ? , MAXTORQUE = ? , BODYTYPE = ? , MODELSIZE = ? , TRUNKSIZE = ? , DOOR = ? , DISPLACEMENT = ? , PERFORMANCEDATA = ? , CARPRICE = ? , ENERGY = ? , RATES = ? WHERE CARID = ?";

        $statement = $pdo->prepare($sql);

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
        $statement->bindValue(17 , $seventeen);
        $statement->execute();
    }
?>