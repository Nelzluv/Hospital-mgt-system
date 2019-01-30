<?php 
	session_start();
	include "conn.php";
 ?>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMINISTRATOR PAGE</title>
  <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="Style/main.css">
</head>
<body>
  <?php include "adminNav.php"; ?>
  </div><!--end of container-->
  <div id = responseText></div>
  <div class="container" id="profileDiv" style="background-image: url('images/bg.jpg'); width: 1140; height:400;" id="profile">
    <?php
      if(isset($_SESSION['cardNumber'])){
    $cardNumber = mysqli_escape_string($conn,$_SESSION['cardNumber']);
    if (!empty($cardNumber)) {
      $query = "select * from patient where cardNumber = '$cardNumber'";
      if ($queryRun = mysqli_query($conn, $query)) {
        if ($row = mysqli_fetch_array($queryRun)) {
          $doctorId = $row['doctorId'];
          $sql = "select firstName from doctor where employeeId = '$doctorId'";
          $sqlRun = mysqli_query($conn, $sql);
          $result = mysqli_fetch_array($sqlRun);
          ?>
            <div class="container">
              <div class="text-center"><h2>COTTAGE HOSPITAL AUCHI</h2></div>
              <div class="container-fluid profileInfo">
                <div class="row">
                  <div class="col-md-3">
                    <h4 class="details">FIRSTNAME: </h4>
                    <h4 class="details">OTHERNAME: </h4>
                    <h4 class="details">LASTNAME: </h4>
                  </div><!--end of col-md-3-->
                  <div class="col-md-6 style='padding-left:50px;'">
                    <h4 class="details"><?php echo strtoupper($row['firstName']); ?></h4>
                    <h4 class="details"><?php echo strtoupper($row['otherName']); ?></h4>
                    <h4 class="details"><?php echo strtoupper($row['lastName']); ?></h4>
                  </div><!--end of col-md-3-->
                  <div class="col-md-3">
                    <img src="<?php echo 'include/'.$row['passport']; ?>" style="width: 115px; height:120px;"> 
                  </div><!--end of col-md-3-->

                </div><!--end of row-->
                <div class="row">
                  <div class="col-md-3">
                    <h4 class="details">SEX: </h4>
                  </div><!--end of col-md-2-->
                  <div class="col-md-1">
                    <h4 class="details"> <?php echo $row['sex']; ?></h4>
                  </div><!--end of col-md-2-->
                  <div class="col-md-2">
                    <h4 class="details text-right">AGE:</h4>
                  </div><!--end of col-md-2-->
                   <div class="col-md-2">
                    <h4 class="details"><?php echo $row['age']; ?></h4>
                  </div><!--end of col-md-2-->
                  <div class="col-md-2">
                    <h4 class="details">CARD NO.:</h4>
                  </div><!--end of col-md-4-->
                   <div class="col-md-2">
                    <h4 class="details"><?php echo $row['cardNumber']; ?></h4>
                  </div><!--end of col-md-4-->

                  <div class="col-md-3">
                    <h4 class="details">SYMPTOMS: </h4>
                  </div><!--end of div-->
                  <div class="col-md-9">
                    <h4 class="details"> <?php echo strtoupper($row['symptoms']); ?></h4>
                  </div><!--end of div-->
                  <div class="col-md-3"> <h4 class="details">NEXT OF KIN: </h4></div><!--end of col-md-6-->
                  <div class="col-md-3"><h4 class="details"> <?php echo $row['nok']; ?></h4></div><!--end of col-md-6-->
                  <div class="col-md-3"><h4 class="details">DOCTOR IN CHARGE: </h4></div><!--end of col-md-6-->
                  <div class="col-md-3"><h4 class="details"> <?php echo $result['firstName']; ?></div><!--end of col-md-6-->
                </div><!--end of row-->
                <div class="row">
                  <div class="col-md-3"> <h4 class="details">STATE: </h4></div><!--end of col-md-3-->
                  <div class="col-md-3"><h4 class="details"> <?php echo strtoupper($row['state']); ?></h4></div><!--end of col-md-3-->
                  <div class="col-md-3"> <h4 class="details">L.G.A: </h4></div><!--end of col-md-3-->
                  <div class="col-md-3"><h4 class="details"> <?php echo strtoupper($row['localGovt']); ?></h4></div><!--end of col-md-3-->
             
                </div>
                <div class="row">
                  <div class="col-md-3"> <h4 class="details">ADDRESS: </h4></div><!--end of col-md-3-->
                  <div class="col-md-3"><h4 class="details"> <?php echo strtoupper($row['address']); ?></h4></div><!--end of col-md-3-->
                  <div class="col-md-3"> <h4 class="details">REGISTERED ON: </h4></div><!--end of col-md-3-->
                  <div class="col-md-3"><h4 class="details"> <?php echo date("Y-m-d H:i:s a", strtotime($row['time'])); ?></h4></div><!--end of col-md-3-->      
                </div>
              </div><!--end of container-fluid-->
            </div><!--end of container-->
          <?php
        } else{
          echo "No result found";
        }
      }else{
        echo mysqli_error($conn);
      }
    } else{
      echo "Search field cannot be empty";
    }
} 
else{
  echo mysqli_error($conn);
}


  ?>

  </div><!--end of div conainer-->
  <div class="container">
    <?php include 'footer.php'; ?>
  </div><!--end of container-->

</body>

  <script type="text/javascript" src="Script/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="scrollreveal/scrollreveal.min.js"></script>
  <script type="text/javascript" src="Script/main.js"></script>
  <script type="text/javascript" src="Script/othermain.js"></script>
  <script type="text/javascript" src="Script/bootstrap.min.js"></script>

</html>
