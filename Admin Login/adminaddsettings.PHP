<?php 
include "localroot.php"; 
session_start(); 

	if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['user_type']) && isset($_SESSION['status'])) {
?>
<?php include "designs.php";?>

<body><br><br><br><br><br>
	<div class="container text-center border border-5"><br>
			<div class="h4 pb-2 text-dark border-bottom border-success"><bR>Admin Login Management</div> <bR>
			<div class= "float-end"><?php include('message.php'); ?></div><br>
			<a class="btn btn-outline-primary btn-light " float-end href="admindashboard.php" role="button">Back to Homepage</a><br>
			
			<form action="adminfunction.php" method="POST">
				
				<div class="admin-dash">
				<bR>
				<input type="text" 		name="id"		placeholder="id" 	class="form-control" required> <br>
				<bR>
				<input type="text" 		name="username"		placeholder="username" 	class="form-control" required> <br>
				<input type="password" 	name="password" 		placeholder="password" 	class="form-control" required> <br>
				<input type="text" 		name="name" 		placeholder="name" 		class="form-control" required> <br>
				<input type="text" 		name="user_type" 		placeholder="user_type" 	class="form-control" required> <br>
				<input type="text" 		name="status" 		placeholder="status" 	class="form-control" required> <br>

					<button type="submit" 	name="add_user" class="btn btn-outline-success btn-light">Add Account</button></center>
				</div><br>
			</form>
		</div>
</body>
</html>

<?php
	}else{
		header("Location: index.php");
		exit();
	}
?>
