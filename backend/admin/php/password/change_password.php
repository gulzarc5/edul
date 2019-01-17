<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['change_pass']) {
		$current_pass = $connection->real_escape_string(mysql_entities_fix_string($_POST['current_pass']));
		$new_pass = $connection->real_escape_string(mysql_entities_fix_string($_POST['new_pass']));
		$sql_fetch_user = "SELECT `pass` FROM `users` WHERE `id`='$_SESSION[user_id]' and `user_type_id` ='1'";

		if ($res_fetch_user = $connection->query($sql_fetch_user)) {
			$row_user = $res_fetch_user->fetch_assoc();
			if (password_verify($current_pass,$row_user['pass'])){
				$password = password_hash($new_pass, PASSWORD_BCRYPT);
				$sql = "UPDATE `users` SET `pass`='$password' WHERE `id` = '$_SESSION[user_id]'";
				if ($res = $connection->query($sql)) {
					header("location:../../change_pass.php?msg=1");
				}else{
					header("location:../../change_pass.php?msg=2");
				}
			}else{
				header("location:../../change_pass.php?msg=3");
			}
		}else{
				header("location:../../change_pass.php?msg=2");
			}
    }else{
    	header("location:../../change_pass.php?msg=2");
    }





	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}





?>