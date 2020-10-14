<?php
//send_mail.php

if(isset($_POST['email_data']))
{
 require 'class/class.phpmailer.php';
 $output = '';
 foreach($_POST['email_data'] as $row)
 {
  $mail = new PHPMailer;
  $mail->SMTPDebug = 2;
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'smtp.hostinger.co.id';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
  $mail->Port = '587';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'admin@event-urplan.com';     //Sets SMTP username
  $mail->Password = 'urplaN-212';     //Sets SMTP password
  $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = 'admin@event-urplan.com';   //Sets the From email address for the message
  $mail->FromName = 'UR PLAN GROUP ';     //Sets the From name of the message
  $mail->AddAddress($row["email"], $row["nama"]); //Adds a "To" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML
  $mail->Subject = 'Tautan Mengikuti Webinar bersama Adinda Amira'; //Sets the Subject of the message
  //An HTML or plain text message body
  $mail->Body = '
  <p>Halooo</p>
  <p>Terima kasih sudah mendaftar dalam program Webinar Exclusive Impact bersama Adinda Amira, mohon segera masuk ke grup whatsapp berikut ini untuk mendapatkan informasi lebih lanjut.</p>
  <p>https://chat.whatsapp.com/FHhUMOAcE5K8EY4QUdefcU</p>
  <p>Best Regards,</p>
  <p>UR Plan Team,</p>
  ';

  $mail->AltBody = '';

  $result = $mail->Send();      //Send an Email. Return true on success or false on error

  if($result["code"] == '400')
  {
   $output .= html_entity_decode($result['full_error']);
  }

 }
 if($output == '')
 {
  echo 'ok';
 }
 else
 {
  echo $output;
 }
}

?>