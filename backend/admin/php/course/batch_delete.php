<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_GET['b_id']) {
		$b_id = $connection->real_escape_string(mysql_entities_fix_string($_GET['b_id']));


	 	$sql = "DELETE FROM `batch` WHERE `id`='$b_id'";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../batch_list.php?msg=5");
	 	}else{
	 		header("location:../../batch_list.php?msg=6");
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