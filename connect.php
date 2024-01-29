<?php
	$conn= mysqli_connect("localhost","root","123456789","user_db") or die("Error: " . mysqli_error($con));
	mysqli_query($conn, "SET NAMES 'utf8' ") or die( mysqli_error($db));
	
	try {
		$con = new PDO("mysql:host=localhost;dbname=user_db", root, 123456789);
		// set the PDO error mode to exception
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
	  } catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	  }
	  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
		  date_default_timezone_set('Asia/Bangkok');
?>