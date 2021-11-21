
<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";


$mail = new PHPMailer(true);
$alert = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'boukiryoussef11@gmail.com';
        $mail->Password = 'youssef1995';

        $mail->Port = '587';

        $mail->setFrom('boukiryoussef11@gmail.com');
        $mail->addAddress('boukiryoussef11@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau Message (Contact page Portfolio)';
        $mail->Body = '  <table style="margin-left: auto; margin-right: auto;"  ><tr style="height: 18px;">
        <td style="width: 50%; height: 18px; text-align: center;" colspan="2"><h2>PortFolio Message</h2></td>
        </tr><tr  > <td  style="width: 50%;" > Name </td><td  style="width: 50%;" >' . $name . '</td></tr><tr><td  style="width: 50%;"> Email  </td><td   style="width: 50%;"> ' . $email . '</td></tr><tr><td  style="width: 50%;"> Message </td><td  style="width: 50%;" > ' . $message . '</td></tr></table>';
        $mail->send();
        $alert = '<div class="alert-light">
        <span>Message Envoyer ! Merci de nos contacter Monsieur </span>' . $_POST['name'] . '
        </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert-error">
        <span>' . $e->getMessage() . '</span>
        </div>';
    }
}

?>