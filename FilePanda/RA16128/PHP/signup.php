<html>
    <head>
        <meta charset="utf-8">
        <title>Access File Panda</title>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="stylesheet" href="../CSS/alt_index.css">
    </head>
    <body class="color_box_1">
        <form class="box" action="signup.php" method="post">
            <h1>SIGN UP</h1>
            <input type="text" name="username" placeholder="New username" required>
            <br>
            <input type="text" name="email" placeholder="Enter e-mail" required>
            <input type="password" name="password" placeholder="Enter new password" required>
            <input type="submit" name="continue" value="CONTINUE">
            <br>
            <a href="../PHP/index.php"><input type="button" name="" value="HOME"></a>
            <a href="../PHP/login.php"><input type="button" name="" value="LOGIN"></a>
        </form>
        <?php
            if(isset($_POST['continue']))
            {
                if(!empty($_POST['username'] && $_POST['email'] && $_POST['password']))
                {
                    $user=$_POST['username'];
                    $email=$_POST['email'];
                    $pass=$_POST['password'];

                    include_once("db.php");
                    mysqli_select_db($conn,'user_fp');
                    
                    //email validation
                    if(filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
                        $check="SELECT * FROM fp_user WHERE user='$user'";
                        $result=mysqli_query($conn,$check);
                        $rowcount=mysqli_num_rows($result);
                    
                        if($rowcount==0)
                        {
                            $sql="INSERT INTO fp_user (user, email, pass) VALUES ('$user', '$email', '$pass')";
                            if(mysqli_query($conn,$sql))
                            {
                                $path="C:/Pranshu/Software/XAMPP/htdocs/FilePanda/RA16128/USER_DIR/";
                                chdir($path); //change cwd to USER_DIR
                                mkdir($user,0777); //creates USER_DIR/$user but cwd is USER_DIR
                                header("Location:login.php");
                            }
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Username not available!')</script>";
                        }
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Invalid Email!')</script>";
                    }
                }
            }
        ?>
    </body>
</html>