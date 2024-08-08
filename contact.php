<?php
	if (isset($_POST['submit'])) {
                $mailto = "subhajitsarkar986@gmail.com";
                $from = $_POST['email'];
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $subject2 = " Your Message Submitted Successfully !!!";
                $message = "client name:". $name.", Wrote the following Message"."\n\n".$_POST['message'];
                $message2 = "Dear".$name."\n\n"."Thank You for Contacting Us !! We'll get back to you shortly";
                $headers = "From:".$from;
                $headers2 = "From:".$mailto;
                $result = mail($mailto , $subject , $message , $headers);
                $result2 = mail($from , $subject2 , $message , $headers2); 
                if($result){
                echo '<script type = "text/javascript">alert("Message sent. Thank You!! we will contact you shortly.")</script>';
                }
                echo '<script type = "text/javascript">alert("Submission failed!! try again leter.")</script>';
		
		
	
	}
	
?>


<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Parax Contact Form'; 
		$to = 'kpprojecta@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

	mail($to, $subject, $body, $from) or die("Error!");

	header(location:" thank-you.html");
	
	}
	
?>


<?php
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
                $subject = $_POST['subject'];

		
		$to = "subhajitsarkar986@gmail.com"; 

                $heading = "mail from covidhelpdesk";
		 
		
		$body = "Name = ". $name . "\r\n Email = ". $email . "\r\n Message =" . $message . "\r\n Subject =" . $subject;

                $headers = " From: covidhelpdesk.000webhostapp.com" . "\r\n" .
                "CC: subhajitsarkar.com";
                  
                if($email!=NULL){
	

	mail($to,$heading,$body,$headers);
	header("location: thank-you.html");
	
	}
	
?>