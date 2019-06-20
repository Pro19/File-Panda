<?php
    $conn=mysqli_connect("localhost","root","","user_fp");
    if(!$conn){
        die("Error in connection". mysqli_error());
    }
?>