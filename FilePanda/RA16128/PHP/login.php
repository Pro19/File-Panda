<html>
    <head>
        <meta charset="utf-8">
        <title>Access File Panda</title>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="stylesheet" href="../CSS/alt_index.css">
        <style>
            h5{
                margin: none;
                border: 0px;
                color: white;
            }
        </style>
    </head>
    <body class="color_box_1">
        <form class="box" action="" method="post" name="loginform">
            <h1>LOGIN</h1>
            <input type="text" name="user" placeholder="username" value="<?php if(isset($_COOKIE['last_user'])){echo $_COOKIE['last_user'];} ?>" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" name="continue" value="CONTINUE">
            <div margin=none>
                <label for="remember"><h5>Remember me?</h5></label>
                <input type="checkbox" name="remember" id="remember"/>
            </div>
            <br><hr>
            <br>
            <a href="../PHP/index.php">
                <input type="button" name="home" value="HOME">
            </a>
            <a href="../PHP/signup.php">
                <input type="button" name="signup" value="SIGN UP">
            </a>
        </form>
        <?php
            if(isset($_POST['continue']))
            {
                if(!empty($_POST['user']) && !empty($_POST['password']))
                {
                    $user=$_POST['user'];
                    $pass=$_POST['password'];

                    include_once("db.php");
                    mysqli_select_db($conn,'user_fp');// or die("cannot select database!"));

                    $sql="SELECT * FROM fp_user WHERE user='".$user."' AND pass='".$pass."'";
                    $query=mysqli_query($conn,$sql);
                    $numrows=mysqli_num_rows($query);
                    if($numrows!=0)
                    {
                        while($row=mysqli_fetch_assoc($query))
                        {
                            $dbuser=$row['user'];
                            $dbpass=$row['pass'];
                        }

                        if($user==$dbuser && $pass==$dbpass)
                        {
                            session_start();
                            $_SESSION['sess_user']=$user;

                            if(!empty($_POST['remember']))
                            {
                                $hour=time()+3600*24*30;    
                                setcookie("last_user",$user,$hour);
                                echo "Cookie set=".$_COOKIE['last_user'];
                            }
                            else
                            {
                                if(isset($_COOKIE['last_user']))
                                {
                                    setcookie("last_user","");
                                }
                            }

                            header("Location:main.php");
                        }
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Invalid data entered!')</script>";
                    }
                }
            }
        ?>
    <script>
    </body>
</html>