<?php 
session_start();
include "localroot.php";
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql = "SELECT * FROM quiz2 WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
			if ($row["user_type"] == "Admin") {
		 		$_SESSION['id'] = $row['id'];
		 		$_SESSION['username'] = $row['username'];
		 		$_SESSION['name'] = $row['name'];
		 		$_SESSION['user_type'] = $row['user_type'];
		 		$_SESSION['name'] = $row['name'];
		 		$_SESSION['status'] = $row['status'];
				header("Location: admindashboard.php");
				exit();

			}if ($row["user_type"] == "User") {
				$_SESSION['id'] = $row['id'];
		 		$_SESSION['username'] = $row['username'];
		 		$_SESSION['name'] = $row['name'];
		 		$_SESSION['user_type'] = $row['user_type'];
		 		$_SESSION['name'] = $row['name'];
		 		$_SESSION['status'] = $row['status'];
				header("Location: userpage.php");
				exit();

			}else{
				echo "username and password are incorrect !";
			}
	}

	if (isset($_POST['username']) && isset($_POST['password'])){
		function validate($data){
 			$data = trim($data);
 			$data = stripslashes($data);
 			$data = htmlspecialchars($data);
 			return $data;
 		}
	 		$username = validate ($_POST['username']);
	 		$password = validate ($_POST['password']);
		 		if (empty($username)){
		 				header("Location: index.php?error=Username is required");
		 				exit();
		 			}else if (empty($password)){
						header("Location: index.php?error=Password is required");
		 				exit();
		 			}else{
		 				header("Location: index.php?error=Sorry! Wrong Username or Password. Please Try Again");
		 				exit();
		 			}
	}
?>
 
