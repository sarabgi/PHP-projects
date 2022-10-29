
<?php 
include "configure.php"; 
session_start(); 
if(isset($_SESSION['worker_id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
&& isset($_SESSION['work_shift'])) {
?>
<?php include "iwishiwasheader.php";?>
<style>
	.titleagain {
  font-size:50px; font-weight:300; text-transform:uppercase;
 margin-left:auto;
 margin-right:auto;
 display:block;
  color: white;
  font-family: Gill Sans, sans-serif;
	}

  a:link, a:visited {
  background-color: #1a3749;
  color: white;
  display:block;
  margin-left:auto;
 margin-right:auto;
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
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 4px solid  #123247;
	border-radius: 12px;
	font-size: 20px;
	background-color: #85c4e5;
	color: #163345;
	font-weight: bold;
}
input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 4px solid  #123247;
	border-radius: 12px;
	font-size: 20px;
	background-color: #85c4e5;
	color: #163345;
	font-weight: bold;
}
input[type=text]:focus {
background-color: lightgreen;
border: 3px solid #84c3e2;
}
input[type=password]:focus {
background-color: lightgreen;
border: 3px solid #84c3e2;
}
button[type=submit] {
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

button[type=submit]:hover{
	background-color: #aac842; /* Green */
  color: black;
}
	</style>
<body><br><br>
	<div class="container text-center border border-5"><br>
			<div class="titleagain">Add Worker Account</div>
			<div class= "float-end"><?php include('notification.php'); ?></div>

			<a href="infodash.PHP"><Center>Back to Admin Homepage</center></a><br>
			<br>
			<form action="adduser1.php" method="POST">
			
			
                <input type="text" 		            name="worker_id"            placeholder="Worker ID" 		    class="form-control" required> <br>
				<input type="text" 		            name="surname"		        placeholder="Surname" 		        class="form-control" required> <br>
				<input type="password" 	            name="password" 	        placeholder="Password" 		        class="form-control" required> <br>
				<input type="text"           		name="work_position"        placeholder="Work Position"		    class="form-control" required> <br>
				<input type="text" 		            name="salary" 	            placeholder="Salary" 	            class="form-control" required> <br>
				<input type="text" 		            name="hours_of_work" 	    placeholder="Hours of Work" 	    class="form-control" required> <br>
				<input type="text" 		            name="department_number" 	placeholder="Department Number" 	class="form-control" required> <br>
				<input type="text" 		            name="work_shift" 			placeholder="Work Shift" 			class="form-control" required> <br>
<br>
                <button type="submit" 	name="add_user"><center>Add Worker Account</button></center>
				<br>
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
