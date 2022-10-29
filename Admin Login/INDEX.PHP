<?php 
include"designs.php"; 
?>
<body>

		<form action="login.php" method="POST"><br><br><br><br><br><br><br><br>
			<div class="container text-center border border-5"><br>
			<center>
			<div class="h4 pb-2 mb-4 text-dark border-bottom border-success">Quiz #2 In ADV03</div>
			<div></div>
			<?php if (isset($_GET['error'])) { ?>
					<p class="error text-danger"><?php echo $_GET['error']; ?></p>
			<?php }?>
			<font size = "7" face ="times new roman"><br>
			<label>Username: </label>
			<input type="text" name="username" placeholder="username"><br><br>
			<label>Password: </label>
			<input type="password" name="password" placeholder="password"><br><br>
			<button type="submit" name="submit" class="btn btn-light btn-outline-success float-middle">Submit</button>
			<div class="h4 pb-2 mb-4 text-dark border-bottom border-success"></div><br>
			</center>
			</div>
		</form>

</body>
</html>
