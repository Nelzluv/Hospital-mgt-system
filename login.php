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
  <title>LOGIN PAGE</title>
  <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="Style/main.css">
</head>
<body>
  <?php include "navigation.php"; ?>
  <div class="container" style="background-image: url('images/bg3.jpg'); width: 1140; height:400; opacity: 0.9;">

    <div class="container-fluid" style="width: 50%; margin-top: 6%;">
          <div class="col-sm-offset-2 col"><h2>Login Credentials for Admin</h2></div>
          <form role="form" class="form-horizontal" id="formLogin">
            <div class="form-group">
              <label for="userName" class="col-sm-2 control-label"> Username </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName">
              </div><!--end of username div-->
            </div><!--end of form-group-->
            <div class="form-group">
              <label for="password" class="control-label col-sm-2">Password</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" id="password" name="password">
              </div><!--end of form-group-->
            </div><!--end of form-group-->
            <div id="responseText" style="color: red;"></div>
            <div class="col-sm-offset-2">
              <button type="submit" class="btn btn-default">Login</button>
            </div><!--end of col-sm-offset-2-->
          </form><!--end of form-->
        </div>

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
