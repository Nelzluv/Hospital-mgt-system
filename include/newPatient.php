<?php
  session_start();
  include "../conn.php";
 ?>
 <?php

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$firstName = mysqli_escape_string($conn, $_POST['firstName']);
		$otherName = mysqli_escape_string($conn, $_POST['otherName']);
		$lastName = mysqli_escape_string($conn, $_POST['lastName']);
		$sex = mysqli_escape_string($conn, $_POST['sex']);
		$symptoms = mysqli_escape_string($conn, $_POST['symptoms']);
		$nok = mysqli_escape_string($conn, $_POST['nok']);
		$age = mysqli_escape_string($conn, $_POST['age']);
		$phoneNumber = mysqli_escape_string($conn, $_POST['phoneNumber']);
		$state = mysqli_escape_string($conn, $_POST['state']);
		$lga = mysqli_escape_string($conn, $_POST['lga']);
		$address = mysqli_escape_string($conn, $_POST['address']);
		$passportPath = mysqli_escape_string($conn, "passports/". basename($_FILES["passport"]["name"]));

		if (!empty($firstName) && !empty($lastName) && !empty($sex) && !empty($symptoms) && !empty($nok) && !empty($age) && !empty($phoneNumber) && !empty($state) && !empty($lga) && !empty($address) && !empty($passportPath)){
			$passportFileType = pathinfo($passportPath, PATHINFO_EXTENSION);
			if(($passportFileType === "jpeg" or $passportFileType === "jpg" or $passportFileType === "png" or $passportFileType === "gif") ){
				
				if(copy($_FILES['passport']['tmp_name'], $passportPath)){
					 //Generating unique card number for the Patient
		            function id($unique, $firstName){

		            $cutFirst = substr($firstName, 0, 3);
		            $cutFirstName = strtoupper($cutFirst);
		            $randNum = sprintf("%03d", mt_rand(0, 999));
		            $randShuffle = str_shuffle($randNum);
		            $unique = $cutFirstName.$randShuffle;
		            return $unique;
		           }
		           //end of function
		           $unique = "";
		           //call function
		           $patientId =  id($unique, $firstName); 

		           //check if card Number already exist in database
		           $sql = "select cardNumber from patient where cardNumber = '$patientId'";
		           $sqlRun = mysqli_query($conn, $sql);
		           $count = mysqli_num_rows($sqlRun);
		           if ($count > 0) {
		           	 $unique = "";
		           	 $patientId = id($unique, $firstName);
		           } else{

		           		$sql = "select employeeId from doctor order by rand() limit 1";
		           		$sqlRun = mysqli_query($conn, $sql);
		           		$result = mysqli_fetch_assoc($sqlRun);
		           		$doctorId = $result['employeeId'];

						$query = "insert into patient (firstName, otherName, lastName, sex, symptoms, nok, age, phoneNumber, state, localGovt, address, passport, cardNumber, doctorId, time) values ('$firstName', '$otherName', '$lastName', '$sex', '$symptoms', '$nok', '$age', '$phoneNumber', '$state', '$lga', '$address', '$passportPath', '$patientId','$doctorId', now())";
						if ($queryRun = mysqli_query($conn, $query)){
							$_SESSION['cardNumber'] = $patientId;
							echo "<script>location.href='patientProfile.php'</script>";
						} 
						else{
							echo mysqli_error($conn);
						}
					}
				}
				else{
					echo mysqli_error($conn);
				}
			}
			else{
				echo "Please only upload jpg, jpeg, png or gif files";
			}
		}
		else{
			echo "Please fill in all the fields";
		}
	} else{
		echo mysqli_error($conn);
	}
 ?>