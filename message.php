<?php 
	if (isset($_SESSION['message'])): ?>
	<div class="alert alert-<?=$_SESSION['msg_type']?> text-center m-0">
		<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		 ?>
	</div>
<?php endif ?>