<?php
	$Name = $_POST['Name'];
	$empno = $_POST['empno'];
	$salary = $_POST['salary'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','fullstack');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(Name, empno, salary) values(?, ?, ?)");
		$stmt->bind_param("ssi", $Name, $empno, $salary);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		
		$stmt->close();
		$conn->close();
	}
?>