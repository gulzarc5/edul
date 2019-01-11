<?php
session_start();
include "../backend/database_connection/connection.php";
if (!empty($_POST['c_pass']) && !empty($_POST['new_pass'])) {
	$c_pass = $connection->real_escape_string(mysql_entities_fix_string($_POST['c_pass']));
	$new_pass = $connection->real_escape_string(mysql_entities_fix_string($_POST['new_pass']));
	
	$sql_fetch_user = "SELECT `pass` FROM `users` WHERE `id`='$_SESSION[user_id]'";
	if ($res_fetch_user = $connection->query($sql_fetch_user)) {
		$row_user = $res_fetch_user->fetch_assoc();
		if (password_verify($c_pass,$row_user['pass'])){
			$password = password_hash($new_pass, PASSWORD_BCRYPT);
			$sql = "UPDATE `users` SET `pass`='$password' WHERE `id` = '$_SESSION[user_id]'";
			if ($res = $connection->query($sql)) {
				echo "1";
			}else{
				echo "2";
			}
		}else{
			echo "2";
		}
	}else{
		echo "2";
	}	
}else{
	echo "2";
}
	



	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>