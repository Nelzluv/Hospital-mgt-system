<?php
session_start();
include "../conn.php";

  $userName = $_SESSION['userName'];
  $query = "select * from user where userName = '$userName'";
  if ($queryRun = mysqli_query($conn, $query)) {
    while ($row = mysqli_fetch_assoc($queryRun)) {
      $userName = $row['userName'];
    }
  } else{
    echo mysqli_error($conn);
  }

  if ($_SERVER['REQUEST_METHOD']=="POST") {
    $school = mysqli_escape_string($conn,$_POST['school']);
    $space = mysqli_escape_string($conn,$_POST['space']);
    $carName = mysqli_escape_string($conn,$_POST['carName']);
    $plateNumber = mysqli_escape_string($conn,$_POST['plateNumber']);

    if(!empty($carName) && !empty($plateNumber)){
      $sql = "select space, school from booking where space = '$space' and school = '$school'";
      if($sqlRun = mysqli_query($conn, $sql)){
        $rowCount = mysqli_num_rows($sqlRun);
        if ($rowCount > 0){
          echo "Sorry! This space has already been taken, try booking another location";
        } else{
          $sql = "insert into booking (userName, school, space, carName, plateNumber, date) values ('$userName', '$school', '$space', '$carName', '$plateNumber', CURDATE())";
          if ($sqlRun = mysqli_query($conn,$sql)) {
            $_SESSION['school'] = $school;
            $_SESSION['space'] = $space;
            $_SESSION['carName'] = $carName;
            $_SESSION['plateNumber'] = $plateNumber;
            echo "<script> location.href='ticket.php'; </script>";
          } else{
            echo mysqli_error($conn);
          }
        }
      }
    } else{
      echo "Car name and Plate number field cannot be empty";
    }
  }

 ?>
