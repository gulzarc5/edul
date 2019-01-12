<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_GET['i_id']) {
		$img_id = $connection->real_escape_string(mysql_entities_fix_string($_GET['i_id']));
		$image = $connection->real_escape_string(mysql_entities_fix_string($_GET['img']));
		$deletePath = "../../../uploads/gallery_image/".$image;
       	unlink($deletePath);
	 	$sql ="DELETE FROM `gallery` WHERE `id`='$img_id'";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../web_image_list.php?msg=3");
	 	}else{
	 		header("location:../../web_image_list.php?msg=4");
	 	}
    }else{
    	header("location:../../web_image_list.php?msg=4");
    }





	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}





?>