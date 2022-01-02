
<?php
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "please login first";
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
}
else{
    each
    "<html>
    <head><title>新增佈告</title></head>
    <body>
      <form methood=post action=bulletin_add.php>
          標   提：<input type=text name=title><br>
          內   容：<br><textarea name=content rows=20 cols=20></textarea><br>
          佈告類型：<input type=radio name=type value=1>系上公告
                   <input type=radio name=type value=1>獲獎資訊
                   <input type=radio name=type value=1>徵才資訊<br>
        　發布時間：<input type=date  name=time ><p></p> 
        <input type=submit  value=新增佈告><input type=reset  value=清除>       

      </form>
    </body>
</html>
"
}

?>






