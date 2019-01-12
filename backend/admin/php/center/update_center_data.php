<?php
	session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";

	if ($_POST['edit_center']) {
		$center_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['center_name']));
		$state = $connection->real_escape_string(mysql_entities_fix_string($_POST['state']));
		$city = $connection->real_escape_string(mysql_entities_fix_string($_POST['city']));
		$address = $connection->real_escape_string(mysql_entities_fix_string($_POST['address']));
		$pin = $connection->real_escape_string(mysql_entities_fix_string($_POST['pin']));
		$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
		$phone_no = $connection->real_escape_string(mysql_entities_fix_string($_POST['phone_no']));
		$center_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['cen_id']));
		$sql = "UPDATE `center` SET `name`='$center_name',`city_id`='$city',`state_id`='$state',`address`='$address',`pin`='$pin',`email`='$email',`phone_no`='$phone_no' WHERE `id`='$center_id'";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../center_list.php?msg=1");
	 	}else{
	 		header("location:../../center_list.php?msg=2");
	 	}
    }else{
    	header("location:../../center_list.php?msg=2");
    }





	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>