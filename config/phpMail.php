<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

function sendEMail($buyer,$buyerEMail,$itemOrdered){
    sendEMailToAdmin($buyer,$itemOrdered);
    sendEMailToCustomer($buyer,$buyerEMail,$itemOrdered);
}

function sendEMailToAdmin($buyer,$itemOrdered){
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'acrux.ssl.hosttech.eu';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'order@it-ems.store';                     //SMTP username
        $mail->Password   = 'sml12345';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('order@it-ems.store', 'IT-EMS');
        $mail->addAddress('luan@kurmann.dev', 'Luan');     //Add a recipie

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Order from '.$buyer;
        $mail->Body    = 'Item Ordered: '.$itemOrdered;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function sendEMailToCustomer($buyer,$itemOrdered,$buyerEMail){
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'acrux.ssl.hosttech.eu';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'order@it-ems.store';                     //SMTP username
        $mail->Password   = 'sml12345';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('order@it-ems.store', 'IT-EMS');
        $mail->addAddress($buyerEMail, $buyer);     //Add a recipie

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thank you for your Order';
        $mail->Body    = 'Hey'.$buyer.'/nThank you for your Order. /nYou Ordered: '.$itemOrdered;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}