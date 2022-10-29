<?php 
include "localroot.php"; 
session_start(); 

	if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['user_type']) && isset($_SESSION['status'])) {
?>
<?php include "designs.php";?>

<body>
<center>
	<br><br><br><br><br><br><br>
	<div class="container text-center border border-5 mg-5 font = times new roman"><br>
		<div class>Admin Login Management</div><br>
		<div class="float-end"><?php include('message.php'); ?></div><br><br>
		<a class="btn btn-light btn-outline-success float-start" href="adminaddsettings.php" role="button"><br>Add Account</a><br>
		<table class="table table-light table-bordered table-striped">
					<thead>
						<tr><br>
							<th>ID</th> &nbsp&nbsp&nbsp&nbsp
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
						
						<tbody>
							<?php $query = "SELECT * FROM quiz2"; 
							$query_run = mysqli_query($conn, $query);
								if (mysqli_num_rows($query_run) > 0) {
									foreach ($query_run as $user) {
										?>
										<tr>
											<td><?= $user['id']; ?></td>
											<td><?= $user['username']; ?></td>
											<td><?= $user['password']; ?></td>
											<td>
												<form action="adminfunction.php" method="POST" class="btn d-inline">
													<button type="submit" name="delete_user" value="<?= $user['id']; ?>" class="btn btn-danger" >Delete</button>
												</form>
											</td>
										</tr>	
										<?php
									}
								}else{
									echo "<h5> No Record Found!</h5>";
								}

							?>
						</tbody>

				</table><br><br>
				<a class="btn btn-light btn-outline-danger float-start" href="logout.php" role="button">Logout</a><br><br>
		</div>
	</div>
</div>
</center>

</body>
</html>
	<?php
	}else{
		header("Location: index.php");
		exit();
	}
?>
 
