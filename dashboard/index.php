<?php 
    include_once("../assts/fctn/serv-conf.php");

    //check auth
    if (isset($_SESSION["userauth_token-key"]) AND $_SESSION["userauth_token-key"] == md5(KEY)) {
        if ( $_SESSION["color"] == "green" ) {
            header("location: " . "./member/");
        } elseif ( $_SESSION["color"] == "blue" ) {
            header("location: " . "./admin/");
        } elseif ( $_SESSION["color"] == "rainbow" ) {
            header("location: " . "./admin/");
        } else {
            session_destroy();
            header("location: " . BASE_URL);
        }
    } else {
        session_destroy();
        header("location: " . BASE_URL);
    } 
?>