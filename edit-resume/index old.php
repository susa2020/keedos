<?php

define('TITLE', "edit resume");
include '../assets/layouts/header.php';
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
        <form method="post" action="includes/edit-resume.inc.php">
            <?php insert_csrf_token(); ?>
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><textarea class="form-control" name="gender" placeholder="gender" rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="experience" placeholder="experience" rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="keyword" placeholder="keyword" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" value="resumesubmit">send </button></div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
