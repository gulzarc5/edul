<?php
	if (!empty($_SESSION['email']) && $_SESSION['admin_user_id'] != 1 && !empty($_SESSION['admin_user_id'])) {
		
	}else{
		header("location:index.php");
	}
?>