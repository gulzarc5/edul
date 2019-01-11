<?php
session_start();
include "../backend/database_connection/connection.php";
	$student_fname = $connection->real_escape_string(mysql_entities_fix_string($_POST['fname']));
	$student_lname = $connection->real_escape_string(mysql_entities_fix_string($_POST['lname']));
	$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
	$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
	$city = $connection->real_escape_string(mysql_entities_fix_string($_POST['city']));
	$state = $connection->real_escape_string(mysql_entities_fix_string($_POST['state']));
	$pin = $connection->real_escape_string(mysql_entities_fix_string($_POST['pin']));
	
	$address = $connection->real_escape_string(mysql_entities_fix_string($_POST['address']));
	$about = $connection->real_escape_string(mysql_entities_fix_string($_POST['about']));


	$sql = "UPDATE `users` SET `f_name`='$student_fname',`l_name`='$student_lname',`email`='$email',`mobile`='$mobile',`state_id`='$state',`city_id`='$city',`address`='$address',`about`='$about',`pin`='$pin' WHERE `id` = '$_SESSION[user_id]'";
	if ($res = $connection->query($sql)) {
		echo "1";
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