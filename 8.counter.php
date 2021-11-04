<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]++;
    else
    $_SESSION["counter"]=1;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
?>