<?php
include "configure.php";
session_start();


	if(isset($_SESSION['worker_id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
	&& isset($_SESSION['work_shift'])) {


		$query = "SELECT * FROM infoquiz2";
		$selec_data = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($selec_data)) {
	
			$user_id = $row['worker_id'];
	}
?>
	<?php include "iwishiwasheader.php"; ?>
	<style>
		


.titleadmmin {
  font-size:35px; font-weight:800; text-transform:uppercase;
  text-align: center;
  color: white;
 
}
a:link, a:visited {
  background-color: #1a3749;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a:hover, a:active {
  background-color: #abc73f;
  color: black;
}
input[type=text] {
  padding: 10px;
  width: 150px;
  border:4px solid #87c6e7;
  border-radius:15px;
  font-family:inherit;
  font-size: inherit;
  font-size:bold;
  grid-template-columns: 1fr 1fr;
}
input[type=submit] {
	padding: 15px 30px;
        text-decoration: none;
		
        margin: 4px 2px;
        cursor: pointer;
    background-color: #86c5e6;
  color: white;
  border: 4px solid #aac842; 
  font-size: 20px;
  border-radius: 12px;
  transition-duration: 0.5s;
}

input[type=submit]:hover{
	background-color: #aac842; /* Green */
  color: black;
}
table{
	text-align: center;
	margin-left: auto;
  margin-right: auto; 
  font-family: Optima;
  font-size:20px;
  font-weight: bold;
  color:white;
  border-bottom: 5px solid #1d3a4c;
}
tr:hover {background-color: lightgreen;}

th {
  background-color: #123247;
  font-family: Courier, monospace;
  color: white;
  font-size:25px;
  width: 120px;
}
h1 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 32px; font-weight: 800; line-height: 72px; margin: 0 0 24px; text-align: center; text-transform: uppercase; }

			</style>
	<body>
		<br><br><br><br><br><br><br>
		<br>
		
			<div class ="titleadmmin">
					<center>Information Management System - Activity 2 in ADV03</center>
					<br>
			</div>
			<?php include('NOTIFICATION.php'); ?></div><br>
			<center><a href="adduser.php">Add Worker Account</center></a><br>
			<form method="post" action="searchuser.php">
				<h1>SEARCH WORKER ID</h1>
			<center>	<input type="text" name="search" required />
				<input type="submit" value="Search"></center>
				<br><br><br>

				<table class="tables">
					<thead>
						<tr>
							<th>	ID</th>
							<th>	Surname</th>
							<th>	Password</th>
							<th>	Work Position</th>
							<th>	Salary</th>
							<th>	Hours of Work </th>
							<th>	Department Number</th>
							<th>	Action</th>
						</tr>
					</thead>

					<tbody>
						<center>
							<?php $query = "SELECT * FROM infoquiz2";
							$query_run = mysqli_query($conn, $query);
							if (mysqli_num_rows($query_run) > 0) {
								foreach ($query_run as $user) {
							?>
									<tr>
										<font face="verdana" size="5">
											<td><?= $user['worker_id']; ?></td>
											<td><?= $user['surname']; ?></td>
											<td><?= $user['password']; ?></td>
											<td><?= $user['work_position']; ?></td>
											<td><?= $user['salary']; ?></td>
											<td><?= $user['hours_of_work']; ?></td>
											<td><?= $user['department_number']; ?></td>
											<td><?= $user['work_shift']; ?></td>
											<td>

												<a href='adduser1.PHP?delete_user=<?= $user['worker_id']; ?> ' type="submit" name="delete_user" " class=" btn btn-danger">Delete</a>
												<a href='updatepage.PHP?update_user=<?= $user['worker_id']; ?> ' type="submit" name="update_user" " class=" btn btn-danger">Update</a>

											</td>
									</tr>
							<?php
								}
							} else {
								echo "<h5> No Record Found!</h5>";
							}

							?>
						</center>
					</tbody>

				</table>
				<center><br><br><br><br><a class="btn btn-light btn-outline-danger float-start" href="logout.php" role="button">Logout</center></a><br><br>
		</div>
		</div>
		</div>


	</body>

	</html>
<?php
} else {

	exit();
}
?>