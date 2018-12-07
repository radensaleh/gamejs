<?php


    include 'connection.php';

    $sql   = "SELECT * FROM tb_user";
    $query = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($query);

    echo $count;


?>
