<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST["name"];
	$user_name=$_POST["user_name"];
	$password=$_POST["pass"];
	$confirm=$_POST["conf"];
	$mobile=$_POST["mob"];
	$college=$_POST["coll"];
	$conn = new mysqli(localhost, Sourabh Varshney, "", Sourabh Varshney);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$stmt=$conn->prepare("INSERT INTO User_Information (Name,username,password,mobile_number,college) VALUES(?,?,?,?,?)");
		$stmt->bind_param("sssss",$name,$user_name,$password,$mobile,$college);
		if($password===$confirm)
			$stmt->execute();
		else
			die("Password do not match");
		$stmt->close();
	}
	$conn->close();
}
?>

