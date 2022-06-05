<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

   $mail = new PHPMailer();
   $mail->Encoding = 'base64';
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);

   $mail ->Username = "nampronam1@gmail.com";
   $mail ->Password = "0337994575";
   $mail ->SetFrom("nampronam1@gmail.com");
   $mail ->Subject = 'Thông Tin Của Bạn';
   if (isset($_SESSION['mailfile'])) {
      if ( $_SESSION['mailfile'] == 1){
      $mail->addStringAttachment(file_get_contents($url), $namea);
      }
   }
   $mail ->Body    = $message ;
   $mail ->AddAddress($email);
   $mail->CharSet = 'UTF-8';
   $mail->Send();
   ?>  