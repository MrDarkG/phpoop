<?php 
	require_once("db.php");
	if (isset($_POST["name"],$_POST["password"])) {
		
		$name=mysqli_real_escape_string($conn,$_POST["name"]);
		$password=mysqli_real_escape_string($conn,$_POST["password"]);
		$sql="INSERT INTO `user`(`name`, `password`) 
			VALUES ('$name','$password')";
		if ($conn->query($sql) === TRUE) {
			echo "success";
		}
		else{
			"error:". $conn->error;
		}
	}
?>