<?php
    session_start();
    if(!isset($_SESSION['sess_user']))
    {
        header("Location:login.php");
    }
    else
    {
        $_SESSION['sess_active']=1;
    }
    include_once("checkfolder.php");
?>