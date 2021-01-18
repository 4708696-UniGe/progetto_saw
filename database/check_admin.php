<?php

    $sql_check = "SELECT email FROM admin WHERE email='{$_SESSION["EMAIL"]}'";

	$result = mysqli_query($conn,$sql_check);
    if (mysqli_affected_rows($conn) != 1) {
        $_SESSION["USER_TYPE"] = 0;
    }
    else{
        $_SESSION["USER_TYPE"] = 1;
    }