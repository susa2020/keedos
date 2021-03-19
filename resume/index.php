<?php

define('TITLE', "show resume");
include '../assets/layouts/header.php';
require("../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
$person  = new Person();
$person->id = "20";
$person->Find();

//d($person->Name, "Person->Name");
//d($person->Birth, "Person->Birth");

function d($v, $t = "")
{
   echo '<div class="form-group">';

   echo '<input class="form-control" value=' . $v. ' type="text" name="name" placeholder="Name">';
   //var_dump($v);
   echo '</div>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <form method="post">
            <?php insert_csrf_token(); ?>
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control"  type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><textarea class="form-control" name="gender" placeholder="gender" rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="experience" placeholder="experience" rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="keyword" placeholder="keyword" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" value="resumesubmit">send </button></div>

            <?php d($person->Name, ""); ?>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
