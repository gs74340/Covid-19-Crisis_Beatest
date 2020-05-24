<?php

    $result="";
    $error="";
    if(isset($_POST['submit'])) {
  require 'phpmailer/PHPMailerAutoload.php';
  

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.hostinger.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'support@anjanainternational.com';                 // SMTP username
$mail->Password = 'kamlesh@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('support@anjanainternational.com');
$mail->addAddress('gs74340@gmail.com');     // Add a recipient
              // Name is optional
$mail->addReplyTo('gs74340@gmail.com', $_POST['name']);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject ='Emergency Resourse Exchange';
$mail->Body = '<strong>Hospital Name: </strong>'.$_POST['name'].'<br> <strong>Phone: </strong>'.$_POST['phone'].'<br> <strong>Date: </strong>'.$_POST['date'].'<br> <strong>Time: </strong>'.$_POST['time'].'<br> <strong>Message: </strong>'.$_POST['msg'];


if(!$mail->send()) {
    $error= "Message could not be sent.";
    
} else {
    $result= "Message has been sent. ThankYou, ".$_POST['name'];
}
}

?>