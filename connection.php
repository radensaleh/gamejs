<?php

$servername = "127.0.0.1";
$database = "db_gamesnake";
$username = "root";
$password = "msalehidris13";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
  echo "";
}else{
  echo "gagal";
}

?>
