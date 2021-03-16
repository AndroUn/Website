<?php
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $username = $_POST['username'];
	$password = $_POST['password'];


	// ბაზასთან კავშირი 
	$mysqli = new mysqli('localhost','root','','test');
	if($mysqli->connect_error){
		echo "$mysqli->connect_error";
		die("Connection Failed : ". $mysqli->connect_error);
	} else {
		$stmt = $mysqli->prepare("INSERT INTO users(full_name, email, number, username, password) values(?, ?, ?, ?, ?, ?)");
		echo $mysqli->error;
		$stmt->bind_param("ssss", $full_name, $email, $number, $login, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "თქვენ წარმატებით დარეგისტრირდით...";
		$stmt->close();
	//	$conn->close();
	}
?>