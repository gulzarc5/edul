<?php
session_start();
	include_once "../database_connection/connection.php";

	if ($_POST['register']) {
		$f_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['f_name']));
		
		$l_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['l_name']));

		$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));

		if (!empty($email)) {
			$sql_email_chk ="SELECT * FROM `users` WHERE `email`='$email' AND `user_type_id`='2'";
		    if ($res_email_chk = $connection->query($sql_email_chk)) {
		      if ($res_email_chk->num_rows > 0) {
		          header("location:../../register.php?msg=3");
		          die();
		      }
		    }else{
		    	header("location:../../register.php?msg=2");
		    	die();
		    }	
		}
	

		$password = $connection->real_escape_string(mysql_entities_fix_string($_POST['password']));
		$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
		$about = $connection->real_escape_string(mysql_entities_fix_string($_POST['about']));
		$password = password_hash($password, PASSWORD_BCRYPT);

		echo "<br>".$f_name;
		echo "<br>".$l_name;
		echo "<br>".$email;
		echo "<br>".$password;
		echo "<br>".$mobile;
		echo "<br>".$about;

		$sql_reg = "INSERT INTO `users`(`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (null,'$f_name','$l_name','2','$email','$password','$mobile',null,null,null,'$about',null,'1',null)";
		// $sql_reg ="INSERT INTO `users` (`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (NULL, 'aaa', 'aaa', '1', 'gulzarc5@gmail.com', '111', '9401943576', NULL, NULL, NULL, 'aaa', NULL, '1', CURRENT_TIMESTAMP)";
		if ($res_reg = $connection->query($sql_reg)) {
			header("location:../../my-account.php");
			$user_id = $connection->insert_id;
			$_SESSION['user_id'] = $user_id;
			$_SESSION['email'] = $email;
			$_SESSION['user_type'] = 2;
			$_SESSION['name'] = $f_name." ".$l_name;
		}else{
			header("location:../../register.php?msg=2");
		}
	}else{
		header("location:../../register.php?msg=2");
	}



	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>