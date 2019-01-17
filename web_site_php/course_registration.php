<?php
session_start();
include "../backend/database_connection/connection.php";

if ($_POST['batch_id_reg']) {
	$student_name = $connection->real_escape_string(mysql_entities_fix_string($_POST['student_name']));
	$mobile = $connection->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
	$address1 = $connection->real_escape_string(mysql_entities_fix_string($_POST['address1']));
	$state = $connection->real_escape_string(mysql_entities_fix_string($_POST['state']));
	$pin = $connection->real_escape_string(mysql_entities_fix_string($_POST['pin']));
	$terms = $connection->real_escape_string(mysql_entities_fix_string($_POST['terms']));
	$email = $connection->real_escape_string(mysql_entities_fix_string($_POST['email']));
	$registration_type = $connection->real_escape_string(mysql_entities_fix_string($_POST['registration_type']));
	$registration_no = $connection->real_escape_string(mysql_entities_fix_string($_POST['registration_no']));
	$address2 = $connection->real_escape_string(mysql_entities_fix_string($_POST['address2']));
	$city = $connection->real_escape_string(mysql_entities_fix_string($_POST['city']));
	$batch_id = $connection->real_escape_string(mysql_entities_fix_string($_POST['batch_id_reg']));
	$password = $connection->real_escape_string(mysql_entities_fix_string($_POST['password']));
	$password = password_hash($password, PASSWORD_BCRYPT);
	$address = $address1.','.$address2;
	if (empty($_POST['terms'])) {
		if ($_POST['terms'] != 1 ) {
			header("location:../live-classes-register.php?msg=3");
			die();
		}
	}
	if (empty($_SESSION['user_id']) && empty($_SESSION['email'])) {
		$sql_user_reg = "INSERT INTO `users`(`id`, `f_name`, `l_name`, `user_type_id`, `email`, `pass`, `mobile`, `state_id`, `city_id`, `address`, `about`, `pin`, `status`, `register_date`) VALUES (null,'$student_name',null,'2','$email','$password','$mobile','$state','$city','$address',null,'$pin','1',date('now'))";
		if ($res_user_reg = $connection->query($sql_user_reg)) {
			$user_id = $connection->insert_id;

			$_SESSION['user_id'] = $user_id;
			$_SESSION['email'] = $email;
			$_SESSION['user_type'] = 2;
			$_SESSION['name'] = $student_name;

			$fetch_batch_sql = "SELECT * FROM `batch` WHERE `id`='$batch_id'";
			if ($res_fetch_batch = $connection->query($fetch_batch_sql)) {
				$row_batch = $res_fetch_batch->fetch_assoc();

				$sql_batch_reg = "INSERT INTO `student_batch_registration`(`id`, `student_id`, `course_id`, `batch_id`, `center_id`, `amount`, `is_paid`,`comments`, `registration_type`, `registration_no`, `reg_date`) VALUES (null,'$user_id','$row_batch[course_id]','$batch_id','$row_batch[center_id]','$row_batch[fees]','0',null,'$registration_type','$registration_no',date('now'))";
				if ($res_batch_reg = $connection->query($sql_batch_reg)) {
					$to = $email;
					$message = generateHtmls($batch_id,$connection);
					$namess = $student_name;
					sendMailEdu($to,$message,$namess);
					header("location:../receipt.php?msg=1&batch=".$batch_id."");
				}else{
					header("location:../live-classes-register.php?msg=2");
				}
			}else{
				header("location:../live-classes-register.php?msg=2");
			}
		}else{
			header("location:../live-classes-register.php?msg=2");
		}
	}else{
		
		$fetch_batch_sql = "SELECT * FROM `batch` WHERE `id`='$batch_id'";
		if ($res_fetch_batch = $connection->query($fetch_batch_sql)) {
				$row_batch = $res_fetch_batch->fetch_assoc();

				$sql_batch_reg = "INSERT INTO `student_batch_registration`(`id`, `student_id`, `course_id`, `batch_id`, `center_id`, `amount`, `is_paid`,`comments`, `registration_type`, `registration_no`, `reg_date`) VALUES (null,'$_SESSION[user_id]','$row_batch[course_id]','$batch_id','$row_batch[center_id]','$row_batch[fees]','0',null,'$registration_type','$registration_no',date('now'))";
				if ($res_batch_reg = $connection->query($sql_batch_reg)) {

					$sql_update_user_info = "";
					$to = $email;

					$message = generateHtmls($batch_id,$connection);
					$namess = $student_name;
					sendMailEdu($to,$message,$namess);

					header("location:../receipt.php?msg=1&batch=".$batch_id."");
				}else{
					header("location:../live-classes-register.php?msg=2");
				}
			}else{
				header("location:../live-classes-register.php?msg=2");
			}
	}
}else{
	header("location:../live-classes-register.php?msg=4");
}



// header("location:../live-classes-log-res.php");


//fUNCTION fOR PREVENTING SQL INJECTION THROUGH INPUT
	function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
	function mysql_fix_string($string){
	    if (get_magic_quotes_gpc()) 
	        $string = stripslashes($string);
	    return $string;
	}


	function generateHtmls($batch_id,$connection){
		 $html = '<center><div class="container" style="margin-top: 30px;">
		  <div class="row">
		    <div class="col-md-4">
		    </div>
		    
		      <div class="">
		        <div class="row">
		         
		        </div>
		        
		        <div class="panel panel-default">
		          <!--<div class="panel-heading"><h5>Complete Online Admission Form In Quick 4 Steps!!!</h5></div>-->
		          <div class="panel-body">
		            <div id="print_div">
		            <div class="row text-center"> 
		          <div class="col-md-12">
		            <h3 class="title-content">Thank You for Registering for the Course</h3>
		          </div>
		       </div>
		              <div class="row text-center">  
		              </div>
		              <div class="row">
		                <h3 class="pdd"> &nbsp; &nbsp; Course Details
		                </h3>
		              </div>
		              <div class="row tblscroll">
		                <div class="table-responsive tblpd"> 
		                  <table class="table table-striped table-bordered" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3" border="1">
		                    <tbody>
		                      <tr class="headerStyle" align="center">
		                        <th align="center">S#
		                        </th>
		                        <th align="center">City 
		                        </th>
		                        <th align="center">Address 
		                        </th>
		                        <th align="center">Contact No
		                        </th>
		                        <!--<th align="center">View</th>-->
		                      </tr>
		                      <tr>
		                        <td align="center">1
		                        </td>'; 
		                          $sql_center ="SELECT `center`.`name` as center_name, `center`.`address` as center_address, `center`.`pin` as center_pin, `center`.`phone_no` as center_phone FROM `batch` INNER JOIN `center` ON `center`.`id` = `batch`.`center_id` WHERE `batch`.`id`='$batch_id'";
		                          if ($res_center = $connection->query($sql_center) ) {
		                             $row_center = $res_center->fetch_assoc();
		                             $html=$html.'<td>'.$row_center['center_name'].'</td>
		                             <td>
		                              '
		                               .$row_center['center_address'].'-'.$row_center['center_pin'].                               
		                              '
		                            </td>
		                            <td>'.$row_center['center_phone'].'</td>';
		                          }
		                       

		                     $html=$html.'</tr>
		                    </tbody>
		                  </table>
		                </div>    
		              </div>
		            <div class="row">
		              <h3 class="pdd">  &nbsp;  &nbsp;  Batche Details
		              </h3>
		            </div>
		            <div class="row tblscroll">
		              <div class="table-responsive tblpd"> 
		                <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3" border="1">
		                  <tbody>
		                    <tr class="headerStyle" align="center">
		                      <th scope="col">Sr.No
		                      </th>
		                      <th scope="col">Batch Name
		                      </th>
		                      <th scope="col">Start Date
		                      </th>
		                      <th scope="col">End Date
		                      </th>
		                      <th scope="col">Timing
		                      </th>
		                      <th scope="col">Total Fees (In Rs.)
		                      </th>
		                    </tr>
		                    <tr>
		                      <td align="center">1
		                      </td>';
		                        $sql = "SELECT * FROM `batch` WHERE `id`='$batch_id'";
		                        if ($res = $connection->query($sql)) {
		                          $row_batch = $res->fetch_assoc();
		                          $html=$html. '<td style="width:130px;">'.$row_batch['name'].'</td>
		                          <td style="width:250px;">'.$row_batch['start_date'].'</td>
		                          <td style="width:200px;">'.$row_batch['end_date'].'</td>
		                          <td style="width:200px;">'.$row_batch['start_time'].'-'.$row_batch['end_time'].'</td>
		                           <td style="width:200px;">'.$row_batch['fees'].'</td>';
		                        }
		                      
		                      
		                      
		                     $html=$html.'</tr>
		                
		                     </tbody>
		                </table>
		              </div>    
		            </div>
		</div>  
		          </div>
		        </div>

		    </div>

		    

		  </div>
		</div></center>';
	return $html;
}

function sendMailEdu($to,$message,$name){
		require_once ('../backend/email/SendGrid-API/vendor/autoload.php');

		/*Post Data*/
		// $name = $_POST['name'];
		// $email = $_POST['email'];
		// $message = $_POST['message'];
		// $page = $_POST['page'];

		/*Content*/
		$from = new SendGrid\Email("Edulounge", "info@edulounge.in
		");
		$subject = "Registration Successfull";
		$to = new SendGrid\Email($name, "gulzarc5@gmail.com");
		$content = new SendGrid\Content("text/html", $message);

		/*Send the mail*/
		$mail = new SendGrid\Mail($from, $subject, $to, $content);
		$apiKey = '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';
		$sg = new \SendGrid($apiKey);

		/*Response*/
		$response = $sg->client->mail()->send()->post($mail);
		var_dump($response);
		// return true;
	}
?>


