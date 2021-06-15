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

$resumeID = $_GET["resume_id"];
$resume_email = $_GET["resume_email"];
$social_media = $_GET["Social_Media"];

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


    $email = $resume_email;
    $user_email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $to = $email;
    $subject = '嘿嘿,有人好像對你有興趣喔！| keedos';

    /*
    * -------------------------------------------------------------------------------
    *   Using email template
    * -------------------------------------------------------------------------------
    */

    $mail_variables = array();

    $mail_variables['APP_NAME'] = APP_NAME;
    $mail_variables['user_email'] = $user_email;
    $mail_variables['user_email_btn'] = 'mailto:'.$user_email;
    $mail_variables['username'] = $username;
    $mail_variables['first_name'] = $first_name;
    $mail_variables['last_name'] = $last_name;
    $mail_variables['Social_Media'] = $social_media;

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
        //$mail->Subject = $subject;
        $mail->Subject = "=?UTF-8?B?".base64_encode($subject)."?=";  //主旨編碼成UTF-8
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
    header("Location: ../?id=".$resumeID);
    exit();
}
else {

    header("Location: ../?id=".$resumeID);
    exit();
}
