<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['edit_teacher']) {
		$techer_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['tec_id']));
		$teacher_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['teacher_name']));
		$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
		$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
		$gender = $connection->real_escape_string(mysql_entities_fix_string($_POST['gender']));
		$b_day = $connection->real_escape_string(mysql_entities_fix_string($_POST['b_day']));
		$qualification = $connection->real_escape_string(mysql_entities_fix_string($_POST['qualification']));
		$about = $connection->real_escape_string(mysql_entities_fix_string($_POST['about']));
		$image = $_FILES['image'];
		$image_name	= null;
		if (isset($image['name'])){
       		$image_name	 = $image['name'];
       		$image_tmp_name = $image['tmp_name'];
       		$ext_explode = explode(".",$image_name);
       		$ext = strtolower(end($ext_explode));
       		if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
       			$sql_image_fetch = "SELECT `image` FROM `teachers` WHERE `id`='$techer_id'";
       			if ($res_image_fetch = $connection->query($sql_image_fetch)) {

       				$image_fetch_row = $res_image_fetch->fetch_assoc();
       				$deletePath = "../../../uploads/teacher_image/".$image_fetch_row['image'];
       				unlink($deletePath);
       			}
       			$image_name = md5(uniqid()).date('now').".".$ext;
       			$path = "../../../uploads/teacher_image/".$image_name ;
       			move_uploaded_file($image_tmp_name,$path);	
       			$sql_update_image = "UPDATE `teachers` SET `image`='$image_name' WHERE `id`='$techer_id'";
       			if ($res_update_image = $connection->query($sql_update_image)) {
       				# code...
       			}
       		}else{
       			header("location:../../teacher_list.php?msg=4");
       		}
	 	}
	 	$sql ="UPDATE `teachers` SET `name`='$teacher_name',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$b_day',`qualification`='$qualification',`about`='$about' WHERE `id`='$techer_id'";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../teacher_list.php?msg=3");
	 	}else{
	 		header("location:../../teacher_list.php?msg=4");
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