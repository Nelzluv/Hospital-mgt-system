<?php
require "../conn.php";
if (isset($_GET["delete"])) {
	$id = $_GET["id"];
	//echo $id;
	$query = "delete from doctor where id = $id";
	$queryRun = mysqli_query($conn, $query);
	if ($queryRun){
		echo '<script> alert("The Doctor has been successfully deleted")</script>';
    	echo "<script>location.href='../viewDoctor.php';</script>";
	}
	else{
		echo mysqli_error($conn);
	}
}

 ?>
