<?php 
include "localroot.php"; 
session_start(); 

	if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['user_type']) && isset($_SESSION['status'])) {
?>
<?php include "designs.php";?>
<body><br><br><br><br><br><br><br><center><br>
		<div class="container text-center border border-5 mg-5">
			<div class="d-inline-flex p-2 text-dark fs-1 ">Welcome, <?php echo $_SESSION['name'];?></div><br>
			<div class="d-inline-flex p-2 text-dark fs-6 ">U S E R P A G E </div><br>
			<a class="btn btn-light btn-outline-dark float-middle" href="logout.php" role="button">Logout</a><br><br>
		</div>
	</body>
</html>

<?php
	}else{
		header("Location: index.php");
		exit();
	}
?>
