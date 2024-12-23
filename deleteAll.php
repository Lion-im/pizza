<?php
    $con = mysqli_connect("MySQL-8.2", "root", "", "pizza_hub");
    mysqli_query($con, "TRUNCATE zakaz");


    header("Location: index.php")
?>