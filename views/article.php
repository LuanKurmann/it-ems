<?php

/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $msg = '';
    $email = '';

    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'acrux.ssl.hosttech.eu';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'order@it-ems.store';
    $mail->Password   = 'sml12345';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    
    
    $mail->setFrom('order@it-ems.store', 'IT-EMS');
    $mail->addAddress('luan@kurmann.dev', 'IT-EMS');     //Add a recipie

    $mail->Subject = 'Order from '.strip_tags($_POST['name']);
    $mail->Body    = 'Name: '.strip_tags($_POST['name'])."\nE-Mail: ".strip_tags($_POST['email'])."\n".'Bestelltes Item: '.$article->getTitle()."\nNachricht:\n".strip_tags($_POST['query']);

    if (!$mail->send()) {
        $msg .= 'Es ist ein Fehler aufgetreten: ' . $mail->ErrorInfo;
    } else {
         $msg .= 'Bestellung plaziert!';
    }
/*
    $mail1 = new PHPMailer(true);

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail1->isSMTP();
    $mail1->Host       = 'acrux.ssl.hosttech.eu';
    $mail1->SMTPAuth   = true;
    $mail1->Username   = 'order@it-ems.store';
    $mail1->Password   = 'sml12345';
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail1->Port       = 465;
    
    
    $mail1->setFrom('order@it-ems.store', 'IT-EMS');
    $mail1->addAddress(strip_tags($_POST['email']), strip_tags($_POST['name']));     //Add a recipie

    $mail1->Subject = 'Danke für die Bestellung';
    $mail1->Body    = 'Hallo '.strip_tags($_POST['name'])."\nDankefür die Bestellung. \nBestellter Artikel: ".$article->getTitle();
    */
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #item:disabled{
            color: black;
            background-color: white;
        }
    </style>
</head>
<body>

    <section>
        <h1>My Article:</h1>
        <ul>
            <li><?php echo $article->getTitle(); ?></li>
            <li><?php echo $article->getDescription(); ?></li>
            <li><?php echo $article->getAmount(); ?></li>
            <li><?php echo $article->getColor(); ?></li>
            <li><?php echo $article->getBrand(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>

        <h1>Order</h1>
        <?php if (empty($msg)) { ?>
            <form method="POST" action="">
                <label for="name">Name: <input type="text" name="name" id="name" maxlength="255" required></label><br>
                <label for="email">E-Mail: <input type="email" name="email" id="email" maxlength="255" required></label><br>
                <label for="item">Produkt: <input type="text" id="item" name="item" value="<?php echo $article->getTitle(); ?>" style="border: none;" readonly disabled></label><br>
                <label for="query">Zusätzliche Informationen:</label><br>
                <textarea cols="30" rows="8" name="query" id="query" placeholder="Zusätzliche Informationen"></textarea><br>
                <input type="submit" value="Bestellen">
            </form>
        <?php } else {
            echo $msg;
        } ?>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
