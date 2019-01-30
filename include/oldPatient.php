<?php
  session_start();
  include "../conn.php";
 ?>

<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstName = mysqli_escape_string($conn,$_POST['firstName']);
    $cardNumber = mysqli_escape_string($conn,$_POST['cardNumber']);

    if(!empty($firstName) and !empty($cardNumber)){
    
      $query = "select * from patient where firstName = '$firstName' and cardNumber ='$cardNumber'";
        $queryRun = mysqli_query($conn,$query);
        $count = mysqli_num_rows($queryRun);
        if ($count>0) {
          $_SESSION['cardNumber'] = $cardNumber;
          echo '<script> location.href="patientProfile.php";</script>';
        } else{ 
          echo "Firstname or Card Number is incorrect";
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
