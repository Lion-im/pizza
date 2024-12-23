<?php
    $con = mysqli_connect("MySQL-8.2", "root", "", "pizza_hub");
    mysqli_query($con, "DELETE FROM zakaz WHERE id='{$_GET["id"]}'");


    header("Location: index.php")
?>