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

  // require '../vendor/phpmailer/phpmailer/src/Exception.php';
  // require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
  // require '../vendor/phpmailer/phpmailer/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 3;  
  $mail->Debugoutput = function($str, $level) {
    file_put_contents('smtp.log', gmdate('Y-m-d H:i:s'). "\t$level\t$str\n", FILE_APPEND | LOCK_EX);
  };
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = $configs['user'];
  $mail->Password   = $configs['pass'];

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $from = $fname.' '. $lname;
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $content = 'Name: '.$from.'<br/>Email: '.$email.'<br/>Subject: '.$subject.'<br/>Message: '.$message;

  $mail->IsHTML(true);
  $mail->AddAddress($configs['contactemail'], "Simon Robinson");
  $mail->SetFrom($email,  $from);
  $mail->Subject = $subject;
  $mail->MsgHTML($content); 

  $mail->Send();
?>