<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST["name"];
	$user_name=$_POST["user_name"];
	$password=$_POST["pass"];
	$confirm=$_POST["conf"];
	$mobile=$_POST["mob"];
	$college=$_POST["coll"];
	$conn = new mysqli("localhost","root","","Sourabh");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$sql="SELECT * FROM User_Information WHERE username='$user_name'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			echo "Username Already Exist";
			die();
		}
		else
		{
			$stmt=$conn->prepare("INSERT INTO User_Information (Name,username,password,mobile_number,college) VALUES(?,?,?,?,?)");
			$stmt->bind_param("sssis",$name,$user_name,$password,$mobile,$college);
			if($password===$confirm)
			{
				$stmt->execute();
				$url="my_page.php";
				redirect($url);
			}
			else
				die("Password do not match");
			$stmt->close();
		}
	}
	$conn->close();
}
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>
