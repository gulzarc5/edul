<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['add_image']) {
		$image = $_FILES['image'];
		$image_name	= null;
		if (isset($image)){
       		$image_name	 = $image['name'];
       		$image_tmp_name = $image['tmp_name'];
       		$ext_explode = explode(".",$image_name);
       		$ext = strtolower(end($ext_explode));
       		if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
       			$image_name = md5(uniqid()).date('now').".".$ext;
       			$path = "../../../uploads/gallery_image/".$image_name ;
       			move_uploaded_file($image_tmp_name,$path);	
       		}else{
       			header("location:../../add_teacher_form.php?msg=2");
       		}
	 	}

	 	$sql = "INSERT INTO `gallery`(`id`, `source`, `type`, `date_added`) VALUES (null,'$image_name','1',date('now'))";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../add_image_form.php?msg=1");
	 	}else{
	 		header("location:../../add_image_form.php?msg=2");
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