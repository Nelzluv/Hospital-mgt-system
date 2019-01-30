<?php
//session_start();
//if(isset($_SESSION['userName'])){
  //header("location: welcome.php");
//}
 ?>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIEW DOCTORS</title>
  <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="Style/main.css">
</head>
<body>
  <?php include "adminNav.php"; ?>

  <div class="container" id="doc">
    <table class="table table-hover table-bordered">
  <tr>
    <th class="warning">No</th>
    <th class="warning">First Name</th>
    <th class="warning">Other Name</th>
    <th class="warning">Last Name</th>
    <th class="warning">Employee Id.</th>
    <th class="warning">Specialization</th>
    <th class="warning">Gender</th>
    <th class="warning">Address</th>
    <th class="warning">Action</th>
  </tr>
  <?php
  include "conn.php";
    $query = "select * from doctor";
    $queryRun = mysqli_query($conn, $query);
    if((mysqli_num_rows($queryRun))>0){
      $count = 1;
      while($row = mysqli_fetch_assoc($queryRun)){
  ?>
      <tr>
        <td class="info active"> <?php echo $count++; ?></td>
        <td class="info active"> <?php echo $row['firstName']; ?> </td>
        <td class="info active"> <?php echo $row['otherName']; ?> </td>
        <td class="info active"> <?php echo $row['lastName']; ?> </td>
        <td class="info active"> <?php echo $row['employeeId']; ?> </td>
        <td class="info active"> <?php echo $row['specialization']; ?> </td>
        <td class="info active"> <?php echo $row['sex']; ?> </td>
        <td class="info active"> <?php echo $row['address']; ?> </td>
        <td class="info active"> <a class="btn btn-danger" type= "submit" name="delete" href="include/deleteDoc.php?delete=1&id='<?php echo $row['id']; ?>'"> Delete </a> </td><br>
      </tr>

  <?php
      }
    }  
   ?>
</table>
  </div><!--end of div conainer-->

  <div class="container">
    <?php include 'footer.php'; ?>
  </div><!--end of container-->

</body>

  <script type="text/javascript" src="Script/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="scrollreveal/scrollreveal.min.js"></script>
  <script type="text/javascript" src="Script/main.js"></script>
  <script type="text/javascript" src="Script/bootstrap.min.js"></script>

</html>
