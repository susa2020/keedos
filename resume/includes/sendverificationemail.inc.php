<?php

session_start();

require '../../assets/includes/auth_functions.php';
require '../../assets/includes/security_functions.php';
//check_logged_in_butnot_verified();

require '../../assets/setup/env.php';
require '../../assets/setup/db.inc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../assets/vendor/PHPMailer/src/Exception.php';
require '../../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../../assets/vendor/PHPMailer/src/SMTP.php';

if (isset($_POST['verifysubmit'])) {

    /*
    * -------------------------------------------------------------------------------
    *   Securing against Header Injection
    * -------------------------------------------------------------------------------
    */

    foreach($_POST as $key => $value){

        $_POST[$key] = _cleaninjections(trim($value));
    }

    /*
    * -------------------------------------------------------------------------------
    *   Verifying CSRF token
    * -------------------------------------------------------------------------------
    */

    if (!verify_csrf_token()){

        $_SESSION['STATUS']['verify'] = 'Request could not be validated';
        header("Location: ../");
        exit();
    }



    $email = $_SESSION['email'];

    $to = $email;
    $subject = 'Verify Your Account';

    /*
    * -------------------------------------------------------------------------------
    *   Using email template
    * -------------------------------------------------------------------------------
    */

    $mail_variables = array();

    $mail_variables['APP_NAME'] = APP_NAME;
    $mail_variables['email'] = $email;
    $mail_variables['url'] = $url;

    $message = file_get_contents("./template_verificationemail.php");

    foreach($mail_variables as $key => $value) {

        $message = str_replace('{{ '.$key.' }}', $value, $message);
    }


    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = MAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION;
        $mail->Port = MAIL_PORT;

        $mail->setFrom(MAIL_USERNAME, APP_NAME);
        $mail->addAddress($to, APP_NAME);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
    }
    catch (Exception $e) {

        // for public use
        $_SESSION['STATUS']['verify'] = 'email could not be sent, try again later';

        // for development use
        // $_SESSION['STATUS']['mailstatus'] = 'email could not be sent. ERROR: ' . $mail->ErrorInfo;

        header("Location: ../");
        exit();
    }

    $_SESSION['STATUS']['verify'] = '成功寄出';
    header("Location: ../");
    exit();
}
else {

    header("Location: ../");
    exit();
}
