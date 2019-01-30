<?php
  session_start();
  include "../conn.php";
 ?>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $searchInput = mysqli_escape_string($conn,$_POST['searchInput']);
    $unique = mysqli_escape_string($conn,$_POST['unique']);
    if (!empty($searchInput)) {
    	$query = "select * from patient where firstName LIKE '%$searchInput%' and cardNumber LIKE '%$unique%'";
    	if ($queryRun = mysqli_query($conn, $query)) {
      	if ($row = mysqli_fetch_array($queryRun)) {
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
                  <div class="col-md-3"></div><!--end of col-md-6-->
                  <div class="col-md-3"></div><!--end of col-md-6-->
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