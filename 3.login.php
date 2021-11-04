<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome";
    else
        echo "fail login";
?>
<!--[id]是網頁上的帳號，[pwd]是密碼-->