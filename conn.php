<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "cottage";
  $conn = mysqli_connect($host, $user, $password, $db);
  if(!$conn){
    echo mysqli_error($conn);
  }

 ?>
