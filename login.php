<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=$_POST["user_name"];
	$pass=$_POST["pass"];
	$conn = new mysqli("localhost","root","","Sourabh");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$stmt="SELECT password FROM User_Information WHERE username='$username'";
		$res=$conn->query($stmt);
		$flag=0;
		if ($res->num_rows > 0) {
			while($row = $res->fetch_assoc()) {
				if($pass===$row["password"])
				{
					$url="logged_in.php";
					redirect($url);
					$flag=1;
					break;
				}
			}
			if($flag===0)
				echo "Password do not match";
		}
		else
			echo $username." not found";
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
