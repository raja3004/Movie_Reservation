<?php

session_start();


if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) ){
    $_SESSION["selected_movie"] = 1;
    header("Location:seatui.php");
}

else{
    $_SESSION["selected_movie"] = 1;
    header("Location:user_access.php?navigate=login");
}

?>