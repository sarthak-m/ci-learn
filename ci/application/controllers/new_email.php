<?php
class New_email extends CI_Controller {
	function index()	
    {
		$email = 'sarthak.dsy@gmail.com';
	    $to = "sarthakmajithia@gmail.com";
	    $subject = "This is subject";
	    $message = "This is simple text message.";
		$headers = 'From: sarthak.dsy@gmail.com' . "\r\n" .
		    'Reply-To: sarthak.dsy@gmail.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
	    
	    $retval = mail ($to,$subject,$message,$headers);
	    if( $retval == true )  
	    {
	       echo "Message sent successfully...";
	    }
	    else
	    {
	       echo "Message could not be sent...";
	    }
    }
	
}
?>