<?php

  session_start();
  include 'connection.php';

      $username = $_POST['username'];
      $password = $_POST['password'];

      $sqlCek = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ";
      $queryCek = mysqli_query($conn, $sqlCek);

      $res = array();

      if( mysqli_num_rows($queryCek) == 0){
        $res['error'] = 1;
        $res['message'] = "Wrong Username or Password";

        echo json_encode($res);

      }else if( mysqli_num_rows($queryCek) >= 1){
        $res['error'] = 0;
        $res['message'] = "Login Success";
        $res['username'] = $username;

        $_SESSION['username'] = $username;
        echo json_encode($res);
      }

?>
