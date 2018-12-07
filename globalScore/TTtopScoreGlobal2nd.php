<?php


    include '../proses/connection.php';

    $sqlSelect   = "SELECT username,score FROM tb_tetris ORDER BY score DESC";
    $querySelect = mysqli_query($conn, $sqlSelect);

    $res = array();

    while ($data = mysqli_fetch_assoc($querySelect)) {
        $res[] = $data;
    }
    echo json_encode($res[1]);

?>
