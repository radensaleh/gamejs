<?php

	include 'connection.php';

	$username = $_POST['eusername'];
	$name     = $_POST['ename_user'];
	$password = $_POST['epassword'];
	$email    = $_POST['eemail'];

	$sqlEdit   = "UPDATE tb_user SET name_user='$name', password='$password', email='$email' WHERE username = '$username' ";
  $queryEdit = mysqli_query($conn, $sqlEdit);

  $res = array();

  if( $queryEdit ){
      $res['error']   = 0;
      $res['message'] = 'Update Success';

      echo json_encode($res);
  }

?>
