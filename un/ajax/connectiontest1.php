<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$password = $_POST['password'];
    $dob = $_POST['dob'];
    $certificate = $_POST['certificate'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];
	
	
   
	
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, address, number, dob, certificate, password, conpass ) values(?, ?, ?, ?, ?, ?, ?, ? )");
		$stmt->bind_param("sssssi", $name, $email, $address, $number,  $dob, $certificate, $password, $conpass );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>