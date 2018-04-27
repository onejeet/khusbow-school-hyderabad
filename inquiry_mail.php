<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	// Function to send a mail
	function mail_it($email_to, $email_subject, $email_message, $headers){
		 return mail($email_to, $email_subject, $email_message, $headers);
	}

if(isset($_POST['submit_email'])){
			if(!(empty($_POST['email']) && empty($_POST['name'])))
			{
					$email= $_POST['email'];
					$name= $_POST['name'];

					$message = '<html><body>';
					$message .= '<div style="width:70%; height:auto;background: #f2f0b0;border:2px solid #000; text-align:center;font-size:20px;">';
					$message .= '<h1> Khusbow Vidya Niketan </h1><hr/>';
					$message .= "<br/><br/><div style=\"color:#000;text-align:left;margin-left:20%;width:70%;\"><span style=\"font-weight:bold;\">Name: </span> " .($_POST['name']) ;
					$message .= "<br/><span style=\"font-weight:bold;\">Email: </span> " .($_POST['email']);
					$message .= "<br/><span style=\"font-weight:bold;\">Mobile Number: </span> " .($_POST['tel']);
					$message .= "<br/><span style=\"font-weight:bold;\">Message: </span><br/> <p>" .($_POST['message']) . "</p><br/>";
					$message.="</div><p><small style=\"text-align:center; font-size:12px;\">|| This is Confidential mail.Copying and 
					forwarding this mail is a criminal offence.<br/>If this mail is not related to you,
					then kindly update the Khusbow Vidya Niketan School at Email-address: khusbowschool@gmail.com ||</small></p><br/><br/><br/>
					</body></html>";

				
			        $cleanedFrom = trim($_POST['email']);	
					$to="jitendra909@gmail.com";
					
			   		$headers = " From:$name<$email>\r\n";
			   		$headers .= "Reply-To:$email\r\n";
			   		$headers  = 'MIME-Version: 1.0' . "\r\n";
			    	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			    	// $headers .= 'X-Mailer: PHP/' . phpversion();
					$subject= "KhusbowSchool Website Inquiry";
					
					if(!mail_it($to,$subject,$message, $headers)){
						phpAlert("Error Occured. Message not sent!");
					}else{
						phpAlert("Message has been sent!");
					}
			}
			
}

?>