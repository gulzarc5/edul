<?php
header('Content-type: image/jpeg');
session_start();
	include "../../admin_login/admin_session_check.php";
	include "../../../database_connection/connection.php";
	if ($_POST['add_image']) {
		$image = $_FILES['image'];
		$image_type = $connection->real_escape_string(mysql_entities_fix_string($_POST['img_type']));
		$category = $connection->real_escape_string(mysql_entities_fix_string($_POST['category']));
		
		$image_name	= null;
		if (isset($image)){
       		$image_name	 = $image['name'];
       		$image_tmp_name = $image['tmp_name'];
       		$ext_explode = explode(".",$image_name);
       		$ext = strtolower(end($ext_explode));
       		if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
       			$new = "image/".$image_name;
       			imageResize($image_tmp_name,$new,200,200);
       			$image_name = md5(uniqid()).date('now').".".$ext;
       			$path = "../../../uploads/gallery_image/".$image_name ;
       			move_uploaded_file($image_tmp_name,$path);	
       		}else{
       			header("location:../../add_teacher_form.php?msg=2");
       		}
	 	}

	 	$sql = "INSERT INTO `gallery`(`id`, `source`, `type`, `category`, `date_added`) VALUES (null,'$image_name','$image_type','$category',date('now'))";
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


	function imageResizes($uploadedfile,$image_name){
		$ext_explode = explode(".",$image_name);
       	$ext = strtolower(end($ext_explode));

       	if( $ext=='jpg' || $ext=='jpeg'  ){
       		$src = imagecreatefromjpeg($uploadedfile);
       	}
       	if( $ext=='png'){
       		$src = imagecreatefrompng($uploadedfile);
       	}
       	else{
       		$src = imagecreatefromgif($uploadedfile);
       	}
       	list($width,$height)=getimagesize($uploadedfile);
       	$newwidth = 360;
       	$newheight = 245;
       	$tmp=imagecreatetruecolor($newwidth,$newheight);
       	imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
       	$filename = "image/".$image_name;
       	imagejpeg($tmp,$filename,100);
       	imagedestroy($src);
		imagedestroy($tmp);

	}

	 function imageResize($source,$destination,$width,$height){
		$ext = strtolower(end(explode(".",$source)));
		if($ext == "jpg" || $ext == "jpeg"){
			$image = imagecreatefromjpeg($source);
		}
		if($ext == "png"){
			$image = imagecreatefrompng($source);
		}
		$image = imagecreatefromjpeg($source);
		$tmp = imagecreatetruecolor($width,$height);
        imagecopyresized($tmp,$image,0,0,0,0,$width,$height,imagesx($image),imagesy($image));

		imagejpeg($tmp,$destination);
	}



?>