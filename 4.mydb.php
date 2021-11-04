<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);

    echo $row["id"] . " " . $row["pwd"]; 
    echo $row["id"] . " " . $row["pwd"]; 
?>
<!--$conn變量是指MySQL數據庫服務器的連接-->
<!--$result是從MySQL取出資料-->
<!-- $row抓一筆資料出來-->
