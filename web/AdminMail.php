<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class AdminMail
{

    public function sendMail()
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'taxigeo123@gmail.com';
            $mail->Password   = 'iugz hgtr flql pgqt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('taxigeo123@gmail.com', 'Theekshana Hirushan');
            $mail->addAddress('upekathikshana963@gmail.com');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Booking Request';
            $mail->Body    = '<h1>Hello!</h1><p>Booking Request has been sent using PHPMailer.</p>';

            $mail->send();
            echo "Message has been sent!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
