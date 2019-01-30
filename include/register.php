<?php
session_start();
include "../conn.php";
  if ($_SERVER['REQUEST_METHOD']=="POST") {
    $userName = mysqli_escape_string($conn,$_POST['userName']);
    $password = mysqli_escape_string($conn,$_POST['password']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $phoneNumber = mysqli_escape_string($conn,$_POST['phoneNumber']);

    if (!empty($userName) && !empty($password) && !empty($email)) {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is not valid!";
      } else{
        $sql = "select userName from user where userName = '$userName'";
        if ($sqlRun = mysqli_query($conn, $sql)) {
          $rowCount = mysqli_num_rows($sqlRun);
          if($rowCount>0){
            echo "Username already exist";
          } else{
            $query = "insert into user (userName, password, email, phoneNumber) values ('$userName', '$password', '$email', '$phoneNumber')";
            if($queryRun = mysqli_query($conn, $query)){
              $_SESSION['userName'] = $userName;
              $_SESSION['email'] = $email;
             echo "<script> location.href='welcome.php'; </script>";
            } else{
              echo mysqli_error($conn);
            }
          }
        } else{
          echo mysqli_error($conn);
        }

      }
    } else{
      echo "All fields are required";
    }

  }

 ?>
