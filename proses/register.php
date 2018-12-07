<?php


  include 'connection.php';

      $username = $_POST['username'];
      $name     = $_POST['name_user'];
      $password = $_POST['password'];
      $email    = $_POST['email'];


      $sqlCek = "SELECT * FROM tb_user WHERE username = '$username' ";
      $queryCek = mysqli_query($conn,$sqlCek);

      $res = array();

      if( mysqli_num_rows($queryCek) >= 1 ){
        $res['error'] = 1;
        $res['message'] = 'Username Already Exists';

        echo json_encode($res);
      }

      $sqlInsert   = "INSERT INTO tb_user(username,name_user,password,email) VALUES('$username','$name','$password','$email')";
      $queryInsert = mysqli_query($conn,$sqlInsert);

      // $score = 0;
      // $sqlPlay    = "INSERT INTO tb_snake(username,score) VALUES('$username','$score')";
      // $queryplay  = mysqli_query($conn,$sqlPlay);

      if( $queryInsert ){
        $res['error'] = 0;
        $res['message'] = 'Register Success';

        echo json_encode($res);
      }

?>
