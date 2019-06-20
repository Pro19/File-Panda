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
                font-weight:300;
                font-family:sans-serif;
            }
            h4{
                color:white;
            }
            #green{
                color:green;
                font-weight:300;
                font-family:sans-serif;
            }

            img.thumb{
                width: 150px;
                height: 150px;
            }
        </style>
    </head>
    <body>   
        <form class="box" action="" method="POST">
        <?php
        $target_path=$path;
        $target_path.="/";
        
        $filelist=glob("$target_path/*");

        $filecount=0;
        foreach ($filelist as $filename)
        {
            $filecount+=1;
        }
        foreach($filelist as $filename)
        {
            echo '<img class="thumb" src="../USER_DIR/'.$_SESSION['sess_user']."/".basename($filename).'" alt="'.basename($filename).'">'."&nbsp;&nbsp;";
            //echo "<h4>".basename($filename)."</h4>";
        }
        if(isset($_POST['main']))
        {
            header("Location:main.php");
        }
        ?>
        <br>
        <h3 id=green>
            Total file(s):
            <?php echo $filecount;   ?>
        </h3>
        <input type="submit" name="main" value="HOME">
        </form>
    </body>
</html>