<?php 
	if(isset($_POST)){ 
			$message = '<html><body>';
			 $message .= '<table rules="all" style="border-color: #666;border: 1px solid #999;" cellpadding="10">';
			  $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			 $message .= "</table>";
			$message .= "</body></html>";
			$to = 'abhishek.bhushan@ekino.com'; 
			$subject = 'Website Inquiry'; 
			$from_mail='no-reply'; 
			 $headers ='From: "1618stack" <'.$from_mail.'@1618stack.com>'. "\r\n";  
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
					$status='success';
					$msg = 'Voila ! Thanks for the subscription.';
            } else { 
				$status='error';
                $msg = 'Something went wrong, Please try after sometime.';
            }
			$message = ['status' => $status, 'msg' => $msg];
			echo json_encode($message);die();
}

?>