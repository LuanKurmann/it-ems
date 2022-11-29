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
    $mail->Body    = 'Name: '. strip_tags($_POST['name'])."\nE-Mail: ".strip_tags($_POST['email'])."\n".'Bestelltes Item: '.$article->getTitle()."\nNachricht:\n".strip_tags($_POST['query']);

    if (!$mail->send()) {
        $msg .= 'Es ist ein Fehler bei der Bestellung aufgetreten: ' . $mail->ErrorInfo;
    } else {
         $msg .= 'Bestellung wurde plaziert!';
    }

    $mail->ClearAllRecipients();
    $mail->setFrom('order@it-ems.store', 'IT-EMS');
    $mail->addAddress(strip_tags($_POST['email']), strip_tags($_POST['name']));     //Add a recipie
    $mail->Subject = 'Danke für die Bestellung';
    $mail->Body    = 'Hallo ' . strip_tags($_POST['name'])."\nDanke für die Bestellung. \nBestellter Artikel: ".$article->getTitle();
    $mail->send();
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
    <!-- Product section-->
    <?php 
    if (empty($article->title)) {
        header('Location: ' . URL_SUBFOLDER);
        die();
    } ?>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">< Back to homepage</a><br>
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo '/it-ems/public/assets/' . $article->getImage() . '.jpg'; ?>" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder"><?php echo $article->getTitle(); ?></h1>
                    <div class="fs-5 mb-4">
                        <span>Verfügbarkeit: <?php echo $article->getAmount(); ?></span><br>
                        <span>Marke: <?php echo $article->getBrand(); ?></span><br>
                        <span>farbe: <?php echo $article->getColor(); ?></span>
                    </div>
                    <p class="lead"><?php echo $article->getDescription(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-4 px-lg-5 my-5">
            <h2>Bestellen</h2><br><br>
            <?php if (empty($msg)) { ?>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Max Mustermann">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="max@mustermann.ch">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="query" class="col-sm-2 col-form-label">Sonstiges</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="query" name="query" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="item" class="col-sm-2 col-form-label">Produkt</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="item" name="item" value="<?php echo $article->getTitle(); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Bestellen</button>
            </div>
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
