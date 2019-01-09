<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['add_video']) {
		$video_link = $_POST['video'];
		
	 	$sql = "INSERT INTO `gallery`(`id`, `source`, `type`, `date_added`) VALUES (null,'$video_link','2',date('now'))";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../add_videos_form.php?msg=1");
	 	}else{
	 		header("location:../../add_videos_form.php?msg=2");
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