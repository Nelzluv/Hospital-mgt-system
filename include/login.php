<?php
  session_start();
  include "../conn.php";
 ?>

<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = mysqli_escape_string($conn,$_POST['userName']);
    $password = mysqli_escape_string($conn,$_POST['password']);

    if(!empty($userName) and !empty($password)){
    
      $query = "select * from user where userName = '$userName' and password ='$password'";
        $queryRun = mysqli_query($conn,$query);
        $count = mysqli_num_rows($queryRun);
        if ($count>0) {
          $_SESSION['userName'] = $userName;
          echo '<script> location.href="admin.php";</script>';
        } else{ 
          echo "Username or Password is incorrect";
        }

    }
    else{
      echo "Please all fields are required";
    }
  }
  else{
    echo "something went wrong!";
  }


 ?>
