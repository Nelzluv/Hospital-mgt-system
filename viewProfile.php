
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
  <div class="container">
  			<form class="form-inline" id="formDocSearch">
			  <div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon"> Search Doctor</div>
			      <input class="form-control" type="text" placeholder="Search for Doctor or Patient" id="search" name="searchInput">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="sr-only" for="employeeId">Employee Id</label>
			    <input type="text" class="form-control" name="unique" placeholder="Id or Card Number" maxlength ="6">
			  </div>
			  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" id="spanglyph"></span></button>
			</form>	<!--end of form-->
  		</div>
  </div><!--end of container-->
  <div id = responseText></div>
  <div class="container" style="background-image: url('images/bg10.jpg'); width: 1140; height:400;" id="profile">

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
