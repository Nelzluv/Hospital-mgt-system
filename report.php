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
  <title>REPORT</title>
  <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="Style/main.css">
</head>
<body>
  <?php include "adminNav.php"; ?>
    
    <div class="container">
       <form id="reportForm">
        <h3>Generate Report within a Specific date</h3>
        <div class="form-group">
           <div class="input-group input-group-lg">
               <span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
             <input type="text" class="form-control" placeholder="From" id="DOB"  name="DOB">
          </div>
        </div><!--end of col-sm-form-group-->
        <h4>to</h4><br>
        <div class="input-group input-group-lg">
               <span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
             <input type="text" class="form-control" placeholder="To" id="DOBSEC"  name="DOBSEC">
          </div><br>
          <input class="btn btn-lg btn-default " type="submit" value="Search...">
          <div id="responseText" style=""></div>
        </form>
        </div><!--end of col-sm-form-group-->
         

    

    </div><!--end of div-->
   
  <div class="container">
    <?php include 'footer.php'; ?>
  </div><!--end of container-->

</body>

  <script type="text/javascript" src="Script/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="scrollreveal/scrollreveal.min.js"></script>
  <script type="text/javascript" src="Script/main.js"></script>
  <script type="text/javascript" src="Script/bootstrap.min.js"></script>
    <script type="text/javascript" src="Script/bootstrap-datepicker.js"></script>
   <script type="text/javascript">
      $(document).ready(function(){
        $('#DOB').datepicker({
          format: "yyyy/mm/dd"
        });

        $('#DOBSEC').datepicker({
          format: "yyyy/mm/dd"
        });
      });
  </script>

</html>
