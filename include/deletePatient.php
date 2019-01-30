<?php
require "../conn.php";
if (isset($_GET["delete"])) {
	$id = $_GET["id"];
	//echo $id;
	$query = "delete from patient where id = $id";
	$queryRun = mysqli_query($conn, $query);
	if ($queryRun){
		echo '<script> alert("This Patient has been successfully deleted")</script>';
    	echo "<script>location.href='../viewPatient.php';</script>";
	}
	else{
		echo mysqli_error($conn);
	}
}

 ?>
