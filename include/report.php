<?php
  session_start();
  include "../conn.php";
 ?>

<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $DOB = $_POST['DOB'];
    $DOBSEC = $_POST['DOBSEC'];
    //echo $DOBSEC ."<br>". $DOB;
    if (!empty($DOB) and !empty($DOBSEC)) {
      //echo $DOB ." ". $DOBSEC;
      $query = " select * from patient where time between '$DOB' and '$DOBSEC 23:59:59'";
      if ($queryRun = mysqli_query($conn, $query)) {
        
          //display title of the report
        echo "<div class='container'><h3><b>FROM THE TIME "  .strtoupper($DOB). " TO " .strtoupper($DOBSEC).",THE FOLLOWING ARE THE LIST OF PEOPLE WHO WAS REGISTERED IN THE SYSTEM</b></h3></div>";
        while ($row = mysqli_fetch_assoc($queryRun)) {
          //query doctor table with doctors Id in order to know the doctor who treated the patient
          $doctorId = $row['doctorId'];
          $sql = "select * from doctor where employeeId = '$doctorId'";
          $sqlRun = mysqli_query($conn, $sql);
          $result = mysqli_fetch_array($sqlRun);

          ?>
        
          <div class="container">
           <div class="row">
              <div class="col-md-6">
              <span class=""> <b>Name:</b> </span><span class=""><?php echo $row['firstName']; ?> </span>
              <span class=""><b>Time:</b> </span><span class=""><?php echo date("Y-m-d H:i:s a", strtotime($row['time'])) ?> </span><br>
               <span class=""> <b>Symptoms:</b> </span><span class=""><?php echo $row['symptoms']; ?> </span><br><hr class="separator">
            </div><!--end of col-md-6-->
            <div class="col-md-6"></div>
             <span class=""> <b>Doctor In Charge:</b> </span><span class=""><?php echo $result['firstName']; ?> </span><br>
              <span class=""> <b>Employee Id:</b> </span><span class=""><?php echo $result['employeeId']; ?> </span><hr class="separator">
           </div><!--end of row-->
          </div><!--end of container-->
          <?php
        }
      } else{
        echo mysqli_error($conn);
      }
    } else{
      echo "All fields are required";
    }
  }
  else{
    echo "something went wrong!";
  }


 ?>
