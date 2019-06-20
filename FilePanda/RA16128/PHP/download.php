<?php
    include_once("db.php");
    include_once("logincheck.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Upload files</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/index.css">
        <style>
            h3{
                color:white;
            }
            h4{
                color:white;
            }
            #greenyellow{
                color:greenyellow;
                font-weight:300;
                font-family:sans-serif;
            }
            img.thumb{
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <form class="box" action="download.php" method="POST">
            <h3>Choose file:</h3> 
            <?php
                $target_path=$path."/";
                $filelist=glob("$target_path/*");

                foreach ($filelist as $filename)
                {
                    echo '<hr>';
                    echo '<img class="thumb" src="../USER_DIR/'.$_SESSION['sess_user']."/".basename($filename).'" alt="'.basename($filename).'">';
                    echo '<a href="../USER_DIR/'.$_SESSION['sess_user'].'/'.basename($filename).'" download><h4 id=greenyellow>'.basename($filename).'</h4></a>';
                }
            ?>
            <br>
            <input type="submit" name="main" value="HOME">
        </form>    
        <?php
            if(isset($_POST['main']))
            {
                header("Location:main.php");
            }
        ?>
    </body>
</html>