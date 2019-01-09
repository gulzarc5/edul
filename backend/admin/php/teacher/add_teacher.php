<?php
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['add_teaher']) {
		$teacher_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['teacher_name']));
		$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
		$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
		$gender = $connection->real_escape_string(mysql_entities_fix_string($_POST['gender']));
		$b_day = $connection->real_escape_string(mysql_entities_fix_string($_POST['b_day']));
		$qualification = $connection->real_escape_string(mysql_entities_fix_string($_POST['qualification']));
		$about = $connection->real_escape_string(mysql_entities_fix_string($_POST['about']));
		$image = $_FILES['image'];
		$image_name	= null;
		if (isset($image)){
       		$image_name	 = $image['name'];
       		$image_tmp_name = $image['tmp_name'];
       		$ext_explode = explode(".",$image_name);
       		$ext = strtolower(end($ext_explode));
       		if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
       			$image_name = md5(uniqid()).date('now').".".$ext;
       			$path = "../../../uploads/teacher_image/".$image_name ;
       			move_uploaded_file($image_tmp_name,$path);	
       		}else{
       			header("location:../../add_teacher_form.php?msg=2");
       		}
	 	}

	 	$sql = "INSERT INTO `teachers`(`id`, `name`, `email`, `mobile`, `gender`, `dob`, `qualification`, `about`, `image`, `added_date`) VALUES (null,'$teacher_name','$email','$mobile','$gender','$b_day','$qualification','$about','$image_name',date('now'))";
	 	if ($res = $connection->query($sql)) {
	 		header("location:../../add_teacher_form.php?msg=1");
	 	}else{
	 		header("location:../../add_teacher_form.php?msg=2");
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