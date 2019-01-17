<?php
session_start();
include "../backend/database_connection/connection.php";

if ($_POST['batch_id_reg']) {
	$student_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['student_name']));
	$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
	$address1 = $connection->real_escape_string(mysql_entities_fix_string($_POST['address1']));
	$state = $connection->real_escape_string(mysql_entities_fix_string($_POST['state']));
	$pin = $connection->real_escape_string(mysql_entities_fix_string($_POST['pin']));
	$terms = $connection->real_escape_string(mysql_entities_fix_string($_POST['terms']));
	$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
	$registration_type = $connection->real_escape_string(mysql_entities_fix_string($_POST['registration_type']));
	$registration_no = $connection->real_escape_string(mysql_entities_fix_string($_POST['registration_no']));
	$address2 = $connection->real_escape_string(mysql_entities_fix_string($_POST['address2']));
	$city = $connection->real_escape_string(mysql_entities_fix_string($_POST['city']));
	$batch_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['batch_id_reg']));
	$password = $connection->real_escape_string(mysql_entities_fix_string($_POST['password']));
	$password = password_hash($password, PASSWORD_BCRYPT);
	$address = $address1.','.$address2;
	if (empty($_POST['terms'])) {
		if ($_POST['terms'] != 1 ) {
			header("location:../live-classes-register.php?msg=3");
			die();
		}
	}
	if (empty($_SESSION['user_id']) && empty($_SESSION['email'])) {
		$sql_user_reg = "INSERT INTO `users`(`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (null,'$student_name',null,'2','$email','$password','$mobile','$state','$city','$address',null,'$pin','1',date('now'))";
		if ($res_user_reg = $connection->query($sql_user_reg)) {
			$user_id = $connection->insert_id;

			$_SESSION['user_id'] = $user_id;
			$_SESSION['email'] = $email;
			$_SESSION['user_type'] = 2;
			$_SESSION['name'] = $student_name;

			$fetch_batch_sql = "SELECT * FROM `batch` WHERE `id`='$batch_id'";
			if ($res_fetch_batch = $connection->query($fetch_batch_sql)) {
				$row_batch = $res_fetch_batch->fetch_assoc();

				$sql_batch_reg = "INSERT INTO `student_batch_registration`(`id`, `student_id`, `course_id`, `batch_id`, `center_id`, `amount`, `is_paid`,`comments`, `registration_type`, `registration_no`, `reg_date`) VALUES (null,'$user_id','$row_batch[course_id]','$batch_id','$row_batch[center_id]','$row_batch[fees]','0',null,'$registration_type','$registration_no',date('now'))";
				if ($res_batch_reg = $connection->query($sql_batch_reg)) {
					header("location:../receipt.php?msg=1&batch=".$batch_id."");
				}else{
					header("location:../live-classes-register.php?msg=2");
				}
			}else{
				header("location:../live-classes-register.php?msg=2");
			}
		}else{
			header("location:../live-classes-register.php?msg=2");
		}
	}else{
		
		$fetch_batch_sql = "SELECT * FROM `batch` WHERE `id`='$batch_id'";
		if ($res_fetch_batch = $connection->query($fetch_batch_sql)) {
				$row_batch = $res_fetch_batch->fetch_assoc();

				$sql_batch_reg = "INSERT INTO `student_batch_registration`(`id`, `student_id`, `course_id`, `batch_id`, `center_id`, `amount`, `is_paid`,`comments`, `registration_type`, `registration_no`, `reg_date`) VALUES (null,'$_SESSION[user_id]','$row_batch[course_id]','$batch_id','$row_batch[center_id]','$row_batch[fees]','0',null,'$registration_type','$registration_no',date('now'))";
				if ($res_batch_reg = $connection->query($sql_batch_reg)) {

					$sql_update_user_info = "";

					header("location:../receipt.php?msg=1&batch=".$batch_id."");
				}else{
					header("location:../live-classes-register.php?msg=2");
				}
			}else{
				header("location:../live-classes-register.php?msg=2");
			}
	}
}else{
	header("location:../live-classes-register.php?msg=4");
}



// header("location:../live-classes-log-res.php");


//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>


