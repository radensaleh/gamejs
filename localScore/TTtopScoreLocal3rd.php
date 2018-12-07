<?php

    include '../proses/connection.php';

    $username = $_POST['username'];

    $res = array();

    $sqlSelect   = "SELECT score FROM tb_tetris WHERE username = '$username' ORDER BY score DESC";
    $querySelect = mysqli_query($conn, $sqlSelect);

    while ($data = mysqli_fetch_assoc($querySelect)) {
        $res[] = $data;

    }
    echo json_encode($res[2]);

?>
