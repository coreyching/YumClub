<!DOCTYPE html>
<html>
<body>
<?php
require '/PHPMailer-master/PHPMailerAutoload.php'; 

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cching808@yahoo.com';                 // SMTP username
$mail->Password = 'bballer3156';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'cching808@yahoo.com';
$mail->FromName = 'Corey Ching';
//$mail->addAddress('5109106809@vtext.com', 'Troy Dimitri');     // Add a recipient
$mail->addAddress('5102053008@messaging.sprintpcs.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

//$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Message has been sent';
}




// $message = wordwrap( $_REQUEST['smsMessage'], 70 );
// $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];
// $result = @mail( $to, '', $message );
?>
<form action="" method="post">
 <ul>
   <li>
     <label for="phoneNumber">Phone Number</label>
     <input type="text" name="phoneNumber" id="phoneNumber" placeholder="7577597204" value="7577597204" /></li>
             <li>
     <label for="carrier">Carrier</label>

<!-- // <?php -->


// 			require '/PHPMailer-master/PHPMailerAutoload.php'; 

// 			$mail = new PHPMailer;

// 			$mail->isSMTP();                                      // Set mailer to use SMTP
// 			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// 			$mail->SMTPAuth = true;                               // Enable SMTP authentication
// 			$mail->Username = 'cching808@yahoo.com';                 // SMTP username
// 			$mail->Password = 'bballer3156';                           // SMTP password
// 			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

// 			$mail->From = 'cching808@yahoo.com';
// 			$mail->FromName = 'Ching';
// 			//$mail->addAddress('5109106809@vtext.com', 'Troy Dimitri');     // Add a recipient
// 			$mail->addAddress('5102053008@messaging.sprintpcs.com');               // Name is optional
// 			//$mail->addReplyTo('info@example.com', 'Information');
// 			//$mail->addCC('cc@example.com');
// 			//$mail->addBCC('bcc@example.com');
// 			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// 			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// 			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// 			$mail->isHTML(true);                                  // Set email format to HTML
// 			//echo $x;
// 			//$mail->Subject = 'Here is the subject';
// 			$mail->Body    = "Yooooooooo";
// 			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// 			if(!$mail->send()) {
// 			   echo 'Message could not be sent.';
// 			   echo 'Mailer Error: ' . $mail->ErrorInfo;
// 			} else {
// 			   echo 'Message has been sent';
// 			}


	

// ?>
