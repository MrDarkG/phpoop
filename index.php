<?php 
	require_once("db.php");

	$sql="SELECT * FROM `user` WHERE 1";


	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
		echo $row["name"];
	}
	/*if (isset($_GET["name"])) {
		# code...
		
		$name=mysqli_real_escape_string($conn,$_GET["name"]);
		$sql="INSERT INTO `user`(`name`, `password`) 
			VALUES ('$name','pwd')";
		if ($conn->query($sql) === TRUE) {
			echo "success";
		}
		else{
			"error:". $conn->error;
		}
	
	}*/
?>