<?php
    include_once("logincheck.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>File Panda</title>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="stylesheet" href="../CSS/alt_index.css">
        <!--<script src="..\JS\bg_time.js"></script>-->
    </head>
    <body class="color_box_1">
        <form class='box' action="" method="POST">
            <h1>
                <?php
                    echo "Hello ".$_SESSION['sess_user'];
                ?>
            </h1>
            <input type='submit' name='view' value='VIEW STATS'>
            <input type='submit' name='upload' value='UPLOAD'>
            <input type='submit' name='download' value='DOWNLOAD'>
            <input type='submit' name='logout' value='LOGOUT'>
        <?php
            if(isset($_POST['logout']))
            {
                $_SESSION['sess_active']=0;
                unset($_SESSION['sess_user']);
                session_unset($_SESSION['sess_user']);
                session_destroy();
                header("Location:index.php");
            }
            elseif(isset($_POST['view']))
            {
                header("Location:view.php");
            }
            elseif(isset($_POST['upload']))
            {
                header("Location:upload.php");
            }
            elseif(isset($_POST['download']))
            {
                header("Location:download.php");
            }
        ?>
    </body>
</html>