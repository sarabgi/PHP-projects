<?php 
 $servername = "localhost";  
       $username = "root";  
       $password = "root";
       $database= "login1";  
       $connection=mysqli_connect ($servername , $username , $password, $database) or die ("My SQL Error");
session_start();
include"localroot.php";
	//FOR DELETE FUNCTION
	if (isset($_POST['delete_user'])) {
		$user_id = mysqli_real_escape_string($conn, $_POST['delete_user']);
		$query = "DELETE FROM quiz2 WHERE id='$user_id' ";
		$query_run = mysqli_query($conn, $query);
			if ($query_run) {
				$_SESSION['message'] = "User Account Succesfuly Deleted";
				header("Location: admindashboard.php");
				exit();
			}else{
				$_SESSION['message'] = "User Account is not Succesfuly Deleted";
				header("Location: admindashboard.php");
				exit();
			}
	}

	

;
      $id = $_POST['id'];
      $username = $_POST['username'];
      $password = $_POST['password'];
       $name = $_POST['name'];
       $user_type= $_POST['user_type'];
      $status =  $_POST['status'];
      $query="INSERT INTO quiz2 (id, username,password,name,user_type,status) 
				VALUES ('$id','$username','$password','$name','$user_type','$status')";
       $result = mysqli_query($connection, $query); 
       if($result)
		   
           {
               echo "Succesfuly Account Added";
           }
           else
           {
            die('Error: '.mysqli_error($connection));
           }
           mysqli_close($connection);
      
?>
