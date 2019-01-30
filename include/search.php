<?php
  session_start();
  include "../conn.php";
 ?>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $search = mysqli_escape_string($conn,$_POST['search']);
    if (!empty($search)) {
    	$query = "select * from doctor where firstName, otherName, lastName LIKE ''%search%";
    	$queryRun = mysqli_query($conn, $query);
    	if ($row = mysqli_fetch_assoc($queryRun)) {
    		$_SESSION['firstName'] = $row['firstName'];
    		echo "<script> location.href='viewProfile.php'</script>";
    	}
    } else{
    	echo "Search field cannot be empty";
    }
} 
else{
	echo mysqli_error($conn);
}

  ?>