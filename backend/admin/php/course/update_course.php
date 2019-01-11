<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['edit_course']) {
		$name = $connection->real_escape_string(mysql_entities_fix_string($_POST['course_name']));
		$c_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['c_id']));


	 	$sql = "UPDATE `course` SET `name`='$name' WHERE `id`='$c_id'";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../add_new_course.php?msg=3");
	 	}else{
	 		header("location:../../add_new_course.php?msg=4");
	 	}
    }else{
    	echo "data not found";
    }





	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}





?>