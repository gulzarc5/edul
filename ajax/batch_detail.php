<?php
session_start();
include "../backend/database_connection/connection.php";
if (!empty($_POST['select_batch'])) {
	$select_batch = $connection->real_escape_string(mysql_entities_fix_string($_POST['select_batch']));
	$sql ="SELECT * FROM `batch` WHERE `id`='$select_batch'";
    if ($res = $connection->query($sql)) {
      $batch = $res->fetch_assoc();
        print '
                <td style="width:270px;">'.$batch['name'].'</td>
                <td style="width:130px;">'.$batch['start_date'].'</td>
                <td style="width:200px;">'.$batch['end_date'].'</td>
                <td style="width:200px;">'.$batch['start_time'].'-'.$batch['end_time'].'</td>
                <td style="width:200px;">'.$batch['fees'].'</td>
              ';
    }else{
    	echo "2";
    }	
}else{
	echo "2";
}
	



	//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}
?>