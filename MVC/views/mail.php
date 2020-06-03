<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/*require ("models/connexiondb.php");*/
if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'salim.rezaiguia15@gmail.com';                     // SMTP username
        $mail->Password   = 'Salimdu95870';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('testir-team@gmail.com', 'Administrateur Testir');
        $mail->addAddress('marie.lemercier@icloud.com');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Testir Test Mail';
        $mail->Body    = 'CA MARCHE INCHALLAH';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    /*require("controllers/Envoimsg.php")*/
    ?>
    <?php /*require('header.php')*/?>

<!--
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheetMVC/envoi.css">
        <title>Testir</title>
    </head>
    <body>

    <div class="corps">
        <div class="rectangle1"> </div>
        <div class="demande">
            <h1> Envoi Mail - Administrateur Testir </h1>
            <b><p class="prems">  Bienvenue  !</p></b>
            <p class="prems"> Veuillez utiliser la saisie ci-dessous pour envoyer un mail d'aide à Testir !</p>
            <div class="rectangle2"> </div>

        </div >
        <form method="POST">
            <div class="envoie">

                <div id="objet">
                    <label> Objet : </label>
                    <input type="text" name="objet" id="input-objet">
                </div>
                <br/><br/>
                <textarea name="message">
        </textarea>
                <br/><br/>
                <div class="boutons"><a href="#">
                        <p>
                            <span class="bg"></span>
                            <span class="base"></span>
                            <input class="texte" type="submit" value="Envoyer" name="envoi_btn">
                        </p>
                    </a>
                </div>
                <br/><br/>
                <label class="error"></label>

            </div>
        </form>
    </div>



    </body> -->
    <?php /*require('footer.php')*/?>
    <?php
}
?>

