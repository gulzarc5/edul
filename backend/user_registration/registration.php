<?php
	include_once "../database_connection/connection.php";

	if ($_POST['register']) {
		$f_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['f_name']));
		
		$l_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['l_name']));

		$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
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

		$sql_reg = "INSERT INTO `users`(`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (null,'$f_name','$l_name','3','$email','$password','$mobile',null,null,null,'$about',null,'1',null)";
		// $sql_reg ="INSERT INTO `users` (`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (NULL, 'aaa', 'aaa', '1', 'gulzarc5@gmail.com', '111', '9401943576', NULL, NULL, NULL, 'aaa', NULL, '1', CURRENT_TIMESTAMP)";
		if ($res_reg = $connection->query($sql_reg)) {
			header("location:../../register.php?msg=1");
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