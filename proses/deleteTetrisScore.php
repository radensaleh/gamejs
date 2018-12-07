<?php

	include 'connection.php';

	$username = $_POST['username'];

  $sqlDel   = "DELETE FROM tb_tetris WHERE username = '$username' ";
  $queryDel = mysqli_query($conn, $sqlDel);

  $res = array();

  if( $queryDel ){
      $res['error']   = 0;
      $res['message'] = 'Delete Success';

      echo json_encode($res);
  }

?>
