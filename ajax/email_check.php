<?php
session_start();
include "../backend/database_connection/connection.php";
if (!empty($_POST['email'])) {
	$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
	$sql ="SELECT * FROM `users` WHERE `email`='$email' AND `user_type_id`='2'";
    if ($res = $connection->query($sql)) {
      if ($res->num_rows > 0) {
          echo "1";
      }else{
        echo "2";
      }
    }else{
    	echo "3";
    }	
}else{
	echo "3";
}
	



	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>