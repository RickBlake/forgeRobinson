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

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = $configs['user'];
  $mail->Password   = $configs['pass'];

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $company = $_POST['company'];
  $from = $fname.' '. $lname;
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $gRecaptchaResponse = $_POST['gRecaptchaResponse'];

  $content = 'Name: '.$from.'<br/>Company: '.$company.'<br/>Email: '.$email.'<br/>Subject: '.$subject.'<br/>Message: '.$message;

  $mail->IsHTML(true);
  $mail->AddAddress($configs['contactemail'], "Simon Robinson");
  $mail->SetFrom($email,  $from);
  $mail->Subject = $subject;
  $mail->MsgHTML($content); 

  $secret = $configs['secret'];
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);

  $resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
                ->verify($gRecaptchaResponse, $_SERVER['REMOTE_ADDR']);
  
  if ($resp->isSuccess()) {

    $mail->Send();
  }
?>