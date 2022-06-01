<?php
$link = mysqli_connect('127.0.0.1', 'root', '','yeticavekar');
mysqli_set_charset($link, utf8);

    $sql1 = 'SELECT * FROM category';
    $result1 = mysqli_query($link, $sql1);
    $sql2 = 'SELECT * FROM lots';
    $result2 = mysqli_query($link,$sql2);


    $catArray = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    $lotArray = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>
