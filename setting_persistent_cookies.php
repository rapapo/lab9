<?php
    setcookie("myLoginName", "myWebsite");
    setcookie("myPreferredColor", "Blue");
    setcookie("CouponNumber", "07470433", time()+60*60*24*7);
    setcookie("CouponValue", "100.00", time()+60*60*24*7);

    print("<br>");
    print("2 temporary cookies were delivered.<br>");
    print("2 persistent cookies were delivered.<br>");

    if(isset($_COOKIE["myLoginName"])){
        $loginName = $_COOKIE["myLoginName"];
        print("Received a cookie named as LoginName: ".$loginName."<br>");
    } else {
        print("Did not received any cookie named as LoginName.<br>");
    }

    $count = count($_COOKIE);
    print("$count cookies received.<br>");
    foreach($_COOKIE as $name => $value){
        print("$name = $value<br>");
    }

    print("\n");
?>