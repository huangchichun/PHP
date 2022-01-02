<?php

    錯誤報告（0）；
    session_start ();
    如果（！$ _SESSION [ “id” ]）{
        echo  "請登入賬號" ;
        echo  "<meta http-equiv=REFRESH content='3, url=login.html'>" ;
    }
    其他{   
        $ conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
        if (! mysqli_query ( $ conn , "更新公告集title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time' ]}',type={$_POST['type']} where bid='{$_POST['bid']}'" )){
            echo  "修改錯誤" ;
            echo  "<meta http-equiv=REFRESH content='3, url=bulletin.php'>" ;
        }其他{
            echo  "修改成功，三後之後回到佈告欄列表" ;
            echo  "<meta http-equiv=REFRESH content='3, url=bulletin.php'>" ;
        }
    }

?>