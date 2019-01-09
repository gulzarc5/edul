<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['add_batch']) {
		$center_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['center_id']));
		$course_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['course_id']));
		$batch_start_date = $connection->real_escape_string(mysql_entities_fix_string($_POST['batch_start_date']));
		$batch_end_date = $connection->real_escape_string(mysql_entities_fix_string($_POST['batch_end_date']));
		$start_time = $connection->real_escape_string(mysql_entities_fix_string($_POST['start_time']));
		$end_time = $connection->real_escape_string(mysql_entities_fix_string($_POST['end_time']));

		$course_name = null;

		$sql_course_name = "SELECT `name` FROM `course` WHERE `id`='$course_id'";
		if ($res_course_name = $connection->query($sql_course_name)) {
			$row_course_name = $res_course_name->fetch_assoc();
			$course_name = $row_course_name['name']."#".date('F',strtotime($batch_start_date))."(".$start_time."-".$end_time.")";
		}
		// echo $course_name;


	 	$sql = "INSERT INTO `batch`(`id`, `name`, `course_id`, `start_date`, `end_date`, `start_time`, `end_time`, `center_id`, `created_at`) VALUES (null,'$course_name','$course_id','$batch_start_date','$batch_end_date','$start_time','$end_time','$center_id',date('now'))";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../add_new_batch.php?msg=1");
	 	}else{
	 		header("location:../../add_new_batch.php?msg=2");
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