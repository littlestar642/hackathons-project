<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=$_POST["username"];
	$pass=$_POST["pass"];
	$conn = new mysqli(localhost, Sourabh Varshney, "", Sourabh Varshney);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$stmt=$conn->prepare("SELECT password FROM User_Information WHERE username=?");
		$stmt->bind_param("s",$username);
		$res=$stmt->execute();
		$flag=0;
		if ($res->num_rows > 0) {
			while($row = $res->fetch_assoc()) {
				if($pass===$row["password"])
				{
					//move to site
					$flag=1;
					break;
				}
			}
			if($flag===0)
				echo "Password do not match";
		}
		else
			echo $username." not found";
		$stmt->close();
	}
	$conn->close();
}
?>
