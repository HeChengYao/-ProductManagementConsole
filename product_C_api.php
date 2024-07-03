<?php
//input
//{"pname" : "可樂", "price" : "90", "pnum" : "10", "premark" : "產品備註", "pimg" : "圖片路徑"}

//output
//{"state":"true", "message":"新增成功"}
// {"state":"fasle", "message":"新增失敗"}
// {"state":"fasle", "message":"欄位不得為空白"}
// {"state":"fasle", "message":"欄位錯誤"}

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("連線失敗".mysqli_connect_errno());
    }
    $sql = "INSERT INTOXXXXX product(Pname, Price, Pnum, Premark, Pimg) VALUES('XXX', 'XXX', 'XXX', 'XXX', 'XXX')";
    if(mysqli_query($conn, $sql)){
        //成功
        echo '{"state":"true", "message":"新增成功"}';
    }else{
        //失敗
        echo '{"state":"fasle", "message":"新增失敗"}';
    }
    mysqli_close($conn);
?>