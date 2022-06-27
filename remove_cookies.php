<?php
    setcookie("CouponNumber", "", time()-1);
    setcookie("CouponValue", "", time()-1);
    print("<pre>\n");
    print("2 cookies were delivered with past times.\n");

    $count = count($_COOKIE);
    print("$count cookies received.<br>");
    foreach($_COOKIE as $name => $value){
        print("$name = $value<br>");
    }

    print("</pre>\n");
?>