<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../vendor/phpmailer/phpmailer/src/Exception.php';
  require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require '../vendor/phpmailer/phpmailer/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 25;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "forgerobinsoncontact@gmail.com";
  $mail->Password   = "*************";

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $company = $_POST['company'];
  $from = $fname.' '. $lname;
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $content = 'Name: '.$from.'<br/>Company: '.$company.'<br/>Email: '.$email.'<br/>Subject: '.$subject.'<br/>Message: '.$message;

  $mail->IsHTML(true);
  $mail->AddAddress("richard.blake@cloudcogs-it.com", "Simon Robinson");
  $mail->SetFrom($email,  $from);
  $mail->Subject = $subject;
  $mail->MsgHTML($content); 
  
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
?>