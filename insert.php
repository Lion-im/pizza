<?php
    $con = mysqli_connect("MySQL-8.2", "root", "", "pizza_hub");
    $title = $_GET["title"];
    $image = $_GET["image"];
    $price = $_GET["price"];
    mysqli_query($con, "INSERT INTO zakaz (title, img, price) VALUES(
        '{$title}',
        '{$image}',
        '{$price}'
    )");


    header("Location: index.php")
?>