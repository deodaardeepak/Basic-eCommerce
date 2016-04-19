<?php
// the message


require_once('class.phpmailer.php');

require_once('class.smtp.php');

$Email="parekh.ashutosh@gmail.com";
$message="Goodbye World!!";

              $mail = new PHPMailer(); // create a new object

              $mail->IsSMTP(); // enable SMTP

              $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only default=0 no error and no msgs.

              $mail->SMTPAuth = true; // authentication enabled

              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail

              $mail->Host = "smtp.gmail.com";

              $mail->Port = 465; // or 587 or 465

              $mail->IsHTML(true);

              $mail->Username = "mail@gmail.com";

              $mail->Password = "password";

              $mail->SetFrom("mail@gmail.com");

              $mail->Subject = "Account Activation Link";

              $mail->Body = $message;

              $mail->AddAddress($Email);

              $mail->Send();
              if(!$mail->Send())

              {

              	echo "Mailer Error: " . $mail->ErrorInfo;

              }

              else

              {

              	echo "Message has been sent";

              }

              ?>