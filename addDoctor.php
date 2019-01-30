 <?php
//session_start();
//if(isset($_SESSION['userName'])){
 // header("location: welcome.php");
//}
 ?>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADD DOCTOR</title>
  <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="Style/main.css">
</head>
<body>
  <?php include "adminNav.php"; ?>
  <div class="container">
    <div class="row" style="background-image: url('images/bg.jpg')">
      <div class="col-md-7" >
        <form role="form" id="formDoctor" class="form-horizontal" enctype="multipart/form-data">
              <div> <h2>FILL IN THE DOCTOR DETAILS</h2> </div>
              <div class="form-group">
                <label for="firstName" class="control-label col-sm-2"> FirstName </label>
                <div class="col-sm-10">
                  <input type = "text" class="form-control" id="firstName" name="firstName">
                </div>
              </div><!--end of form-group-->

              <div class="form-group">
                <label for="lastName" class="control-label col-sm-2">Other Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="otherName" name="otherName">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

               <div class="form-group">
                <label for="lastName" class="control-label col-sm-2">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="lastName" name="lastName">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div class='form-group'>
                <label class="control-label col-sm-2" for="sex"> Sex </label>
                <div class="col-sm-10">
                  <select class="form-control" id="sex" name="sex">
                    <option>Male</option>
                    <option>Female</option>
                  </select><!--end of select-->
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div class="form-group">
                <label for="specialization" class="control-label col-sm-2">Specialization</label>
                <div class="col-sm-10">
                 <textarea class="form-control" rows="3" name="specialization"></textarea>
                </div><!--end of col-sm-10-->
              </div><!--end of form-group--> 

              <div class="form-group">
                <label for="nok" class="control-label col-sm-2">Next of Kin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nok" name="nok">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div class="form-group">
                <label for="age" class="control-label col-sm-2">age</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="age" name="age">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->
    

              <div class="form-group">
                <label for="phonenumber" class="control-label col-sm-2">Phone Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div class="form-group">
                <label for="state" class="control-label col-sm-2">State</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="state" name="state">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

               <div class="form-group">
                <label for="lga" class="control-label col-sm-2">L.G.A</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="lga" name="lga">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

               <div class="form-group">
                <label for="address" class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="address" name="address">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div class="form-group">
                <label for="passport" class="control-label col-sm-2">Passport</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="passport" name="passport">
                </div><!--end of col-sm-10-->
              </div><!--end of form-group-->

              <div id="responseText"></div>
              <input type="submit" class="btn btn-style btn-add col-sm-offset-2" value="Add Doctor Record">
            </form>
      </div>
      <div class="col-md-5" id="rightDiv">
        <img src="images/cottageBus.jpg" class="img-responsive">

      </div>
    </div><!--end of row-->
  </div><!--end of container-->
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
