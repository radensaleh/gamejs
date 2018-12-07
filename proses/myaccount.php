<?php

    include "connection.php";

    $username = $_POST['username'];

    $sqlSelect   = "SELECT * FROM tb_user WHERE username = '$username' ";
    $querySelect = mysqli_query($conn, $sqlSelect);

    $res = array();

    while ($data = mysqli_fetch_assoc($querySelect)) {
        $res['data'] = $data;
        echo json_encode($res);
    }


?>
