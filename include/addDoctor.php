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
		$specialization = mysqli_escape_string($conn, $_POST['specialization']);
		$nok = mysqli_escape_string($conn, $_POST['nok']);
		$age = mysqli_escape_string($conn, $_POST['age']);
		$phoneNumber = mysqli_escape_string($conn, $_POST['phoneNumber']);
		$state = mysqli_escape_string($conn, $_POST['state']);
		$lga = mysqli_escape_string($conn, $_POST['lga']);
		$address = mysqli_escape_string($conn, $_POST['address']);
		$passportPath = mysqli_escape_string($conn, "../docpassports/". basename($_FILES["passport"]["name"]));

		if (!empty($firstName) && !empty($lastName) && !empty($sex) && !empty($specialization) && !empty($nok) && !empty($age) && !empty($phoneNumber) && !empty($state) && !empty($lga) && !empty($address) && !empty($passportPath)){
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
		           $employeeId =  id($unique, $firstName); 

		           //check if card Number already exist in database
		           $sql = "select employeeId from doctor where employeeId = '$employeeId'";
		           $sqlRun = mysqli_query($conn, $sql);
		           $count = mysqli_num_rows($sqlRun);
		           if ($count > 0) {
		           	 $unique = "";
		           	 $patientId = id($unique, $firstName);
		           } else{

						$query = "insert into doctor (firstName, otherName, lastName, sex, specialization, nok, age, phoneNumber, state, localGovt, address, passport, employeeId, time) values ('$firstName', '$otherName', '$lastName', '$sex', '$specialization', '$nok', '$age', '$phoneNumber', '$state', '$lga', '$address', '$passportPath', '$employeeId', now())";
						if ($queryRun = mysqli_query($conn, $query)){
							echo 'Doctor record added successfully';
							echo "<script>window.location.href='addDoctor.php';</script>";
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