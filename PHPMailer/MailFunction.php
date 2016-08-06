<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer; 
$mail1 = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'AKIAJHQ3XNEXXHP27ZSA';                 // SMTP username
$mail->Password = 'AoeE41tcpicmrBVhhdVtiA9pUIvKCD7rndYhnsUalQCj';            // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;  
$mail->IsHTML(true);



$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'AKIAJHQ3XNEXXHP27ZSA';                 // SMTP username
$mail1->Password = 'AoeE41tcpicmrBVhhdVtiA9pUIvKCD7rndYhnsUalQCj';           // SMTP password
$mail1->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted

$mail1->Port = 465;
$mail1->IsHTML(true);  
$mail1->setFrom('hi@imzolo.com', 'imzolo.com');
$mail1->addAddress($_POST['email'], $_POST['name']);  
$mail1->isHTML(true); 
$mail1->Subject = 'Thank you for contacting us';
$mail1->Body    = file_get_contents('template.php');
$mail1->send();

$mail->setFrom('hi@imzolo.com', 'Happy Rakshabandhan');
$mail->addAddress('lakhani@imzolo.com');               
$mail->addAddress('chandni@imzolo.com');               
// $mail->addAddress('javedahamad4@gmail.com');               
$mail->Subject = 'Happy Rakshabandhan';
$mail->Body    = '<p>name '.$_POST['name'].'</p><p> email '.$_POST['email'].'</p><p> Contact Number: '.$_POST['number'].'</p>';

if(!$mail->send()) {
    echo 'error';
} else {
	// echo 'success';
	?>
	<script>
	window.location.href="../thank-you.html"
	</script>
<?php 	
}
