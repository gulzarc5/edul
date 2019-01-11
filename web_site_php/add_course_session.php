<?php
session_start();
$_SESSION['batch']=$_GET['batch_id'];
print_r($_SESSION['batch']);

if (!empty($_SESSION['user_id']) && !empty($_SESSION['email'])) {
	header("location:../live-classes-register.php");
}else{
	header("location:../live-classes-log-res.php");
}

?>