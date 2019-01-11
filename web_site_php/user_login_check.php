<?php
session_start();
include "../backend/database_connection/connection.php";

if(isset($_POST['email']) && !empty($_POST['email']) && !empty($_POST['password'])){
	$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
    $password = $connection->real_escape_string(mysql_entities_fix_string($_POST['password']));

    $sql ="SELECT * FROM `users` WHERE `email` = '$email' AND `user_type_id` !='1'";
    if ($result=$connection->query($sql)){
        if($result->num_rows > 0) {
        	$user=$result->fetch_assoc();
            if (password_verify($password,$user['pass'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $email;
                $_SESSION['user_type'] = 2;
                $_SESSION['name'] = $student_name;

                if (!empty($_POST['page'])) {
                    header("location:../live-classes-register.php");
                }else{
                    header("location:../my-account.php");
                }
                
	        }else{
	        	 header("location:../login.php?msg=3");
	        }
	    }else{
    		header("location:../login.php?msg=2");
    	}
	}else{
		header("location:../login.php?msg=2");
	}
}




function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
function mysql_fix_string($string){
    if (get_magic_quotes_gpc()) 
        $string = stripslashes($string);
    return $string;
}
?>