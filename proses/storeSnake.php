<?php

  include 'connection.php';

    $username  = $_POST['username'];
    $score     = $_POST['newScore'];

    $res = array();

    $sqlInsert   = "INSERT INTO tb_snake(username,score) VALUES('$username','$score')";
    $queryInsert = mysqli_query($conn,$sqlInsert);

    if( $queryInsert ){
        $res['username'] = $username;
        $res['newScore'] = $score;
        echo json_encode($res);
    }

?>
