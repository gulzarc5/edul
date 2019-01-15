<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['edit_std_reg'] && !empty($_POST['reg_id'])) {
		$reg_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['reg_id']));
		$page = $connection->real_escape_string(mysql_entities_fix_string($_POST['page']));
		$comments = $connection->real_escape_string(mysql_entities_fix_string($_POST['comments']));
		$status = $connection->real_escape_string(mysql_entities_fix_string($_POST['status']));
		
	 	$sql ="UPDATE `student_batch_registration` SET `is_paid`='$status',`comments`='$comments' WHERE `id`='$reg_id'";
	 	if ($res = $connection->query($sql)) {
	 		if ($page == 'paid') {
	 			header("location:../../registered_course_paid.php?msg=1");
	 		}else{
	 			header("location:../../registered_course.php?msg=1");
	 		}
	 		
	 	}else{
	 		if ($page == 'paid') {
	 			header("location:../../registered_course_paid.php?msg=2");
	 		}else{
	 			header("location:../../registered_course.php?msg=2");
	 		}
	 	}
    }else{
    	if ($page == 'paid') {
	 			header("location:../../registered_course_paid.php?msg=2");
	 		}else{
	 			header("location:../../registered_course.php?msg=2");
	 		}
    }





	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}





?>