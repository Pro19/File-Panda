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
        </style>
    </head>
    <body>
        <form class="box" action="upload.php" method="POST" enctype="multipart/form-data">
            <h3>Choose file:</h3>
            <br>
            <input type="file" name="uploadedfile" id="file">  
            <br>  
            <input type="submit" name="upload" value="UPLOAD">
            <br>
            <input type="submit" name="main" value="HOME">
        </form>    
        <?php
            if(isset($_POST['upload']))
            {
                if($_FILES['uploadedfile']['size']!=0)
                {
                    $target_path=$path;
                    $target_path.="/";
                    $target_path.=basename($_FILES['uploadedfile']['name']);
                    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path))
                    {
                        echo "<script type='text/javascript'>alert('Uploaded!')</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Failed to upload!')</script>";
                    }
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Select a file to upload!')</script>";
                }
            }
            elseif(isset($_POST['main']))
            {
                header("Location:main.php");
            }
        ?>
    </body>
</html>