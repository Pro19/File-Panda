<?php
    $path="C:/Pranshu/Software/XAMPP/htdocs/FilePanda/RA16128/USER_DIR/";
    chdir($path); //change to USER_DIR
    $path.=$_SESSION['sess_user']; //append user_name to USER_DIR
    if(!file_exists($path))
    {
        echo "<script type='text/javascript'>alert('No folder found!!')</script>";
        $_SESSION['sess_folder_exist']=0;
    }
    else
    {
        chdir($path); //change to USER_DIR/user_name
        $_SESSION['sess_folder_exist']=1;
    }
?>