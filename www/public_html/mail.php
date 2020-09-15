<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  $path;
  if (file_exists('../vendor/autoload.php')) {
      $path = '../vendor/autoload.php';
  } else {
      $path = '../../vendor/autoload.php';
  }
  require_once $path;

  $configs = include('../config.php');

  $mail = new PHPMailer();
  $content_type = 'text/plain';
  $mail->ContentType = $content_type;
  $mail->IsMail();

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $from = $fname.' '. $lname;
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $content = 'Name: '.$from.'<br/>Email: '.$email.'<br/>Subject: '.$subject.'<br/>Message: '.$message;

  $mail->IsHTML(false);
  $mail->AddAddress($configs['contactemail'], "Simon Robinson");
  $mail->SetFrom($email,  $from);
  $mail->Subject = $subject;
  $mail->MsgHTML($content); 

  $mail->Send();
?>