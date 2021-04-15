<?php 
$to = 'twnolfetainerlolz@gmail.com';
$subject = 'Keedos Mail System Test';
$message = 'Hello World!';

if(mail($to,$subject,$message)){
    echo 'Mail has been sent successfully.';
}
else {
    echo 'Unable to send email. Please Try again!';
}
?>