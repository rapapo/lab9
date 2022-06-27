<?php
    session_start();
    echo "<html>";

    $_SESSION["myLogin"] = "myWebsite";
    echo "A value saved in the session named as myLogin.<br>";
    
    $_SESSION["myColor"] = "Blue";
    echo "A value saved in the session named as myColor.<br>";

    echo "Click <a href=next_page.php>Next Page</a>"
            ." to retrieve the values.<br>";
    echo "</html><br>";
?>