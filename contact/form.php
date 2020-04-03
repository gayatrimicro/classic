<?php

	// echo $Array[0];
	
	 $name = $_POST["name"];
	
	 $subject1 = $_POST["subject"];
	 $email = $_POST["email"];
	 $phone = $_POST["phone"];
	 $message = $_POST["message"];
	
	 
	 
	
	$subject ="Classic Contact From " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Classic' . "\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			  	
	                 <tr>
	                   <td align='left' width='35%'><strong>Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $name ."</td>
	                 </tr>
	                 
	                 
	   			  	<tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $email ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Phone :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $phone ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Subject :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $subject1 ."</td>
	                 </tr>
	                 
	                 <tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $message ."</td>
	                 </tr>
	               </table>";  
	              
	  	  mail("sales@clmet.com", $subject, $message, $headers);
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		echo "Your enquiry has been sent successfully";
	  	//$msg = "Your enquiry has been sent successfully.";	

?>            