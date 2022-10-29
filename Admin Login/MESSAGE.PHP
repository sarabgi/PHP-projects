<?php 
	if (isset($_SESSION['message']) && isset($_SESSION['username'])) :
?>	

	<div class="alert alert-primary alert-dismissible fade show d-inline" role="alert">
		<strong>ADMIN ERROR:</strong><?= $_SESSION['username']; ?> ,<?= $_SESSION['message']; ?>

	</div>

<?php 
	unset($_SESSION['message']);
	endif;
?>
