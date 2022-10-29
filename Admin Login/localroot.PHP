<?php 
	$sname= "localhost";
	$uname= "root";
	$pass= "root";
	$db_name="login1";

	$conn = mysqli_connect($sname, $uname, $pass, $db_name);
	if (!$conn) {
		echo "CONNECTION FAILED!!!";
	}

?>
