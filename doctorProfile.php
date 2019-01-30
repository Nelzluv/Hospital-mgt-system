<?php 
	session_start();
	include "conn.php";
	$data = " ";
	if (isset($_POST['search'])) {
		$search = mysqli_escape_string($_POST['search']);
		$query = "select firstName from doctor where firstName LIKE '%$search%'";
		$queryRun = mysqli_query($query);
		$count = mysqli_num_rows($queryRun);
		if ($count>0) {
			while ($row = mysqli_fetch_assoc($queryRun)) {
				$data = $data ."<div>". $row['firstName'] ."</div>";
			}
			echo $data;
		}
	}
 ?>


