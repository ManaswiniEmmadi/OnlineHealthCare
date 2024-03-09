<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','hs');
	if($conn->connect_error){
		echo "Connection Failed...";
		die('Connection Failed : '.$conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO `register`.`register`(`username`, `email`, `password`) VALUES ('?','?','?')");
                $stmt->bind_param("sss", $username, $email, $password);
		$execval = $stmt->execute();
		$stmt->$execute();
		echo "Login successfully...";
		$stmt->close();
		$conn->close();
	}
?>