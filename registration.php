<?php
		$fullName = $_POST['fullName'];
		$birthDate = $_POST['birthDate'];
		$familyCount = $_POST['familyCount'];
		$Contact = $_POST['Contact'];
		$farmingCrops = $_POST['farmingCrops'];
		$productionRate = $_POST['productionRate'];
		$marketRate = $_POST['marketRate'];
		$gender = $_POST['dropdown']; 

	

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullName, birthDate, familyCount, Contact, farmingCrops, productionRate, marketRate, gender) values(?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("siiisiis", $fullName, $birthDate, $familyCount, $Contact, $farmingCrops, $productionRate, $marketRate, $gender);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header("Location: login.html");
		exit();
	}
?>